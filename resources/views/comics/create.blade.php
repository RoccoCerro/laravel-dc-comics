@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{ route('comics.store') }}" method="POST">

    {{-- Cross Site Request Forgering --}}
    @csrf 

    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="Titolo della pasta">
    </div>

    <div class="mb-3">
      <label for="thumb" class="form-label">thumb</label>
      <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://...">
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">price</label>
      <input type="text" name="price" class="form-control" id="price" placeholder="">
    </div>

    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" name="series" class="form-control" id="series" placeholder="">
    </div>

    <div class="mb-3">
      <label for="sale_date" class="form-label">Date</label>
      <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione"></textarea>
    </div>

    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" name="type" class="form-control" id="type" placeholder="">
    </div>

    <button class="btn btn-primary">Crea</button>
  </form>
</div>
@endsection