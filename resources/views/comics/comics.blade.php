@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @foreach ($comics as $comic)
        <div class="col-4">
          <ul>
            <li>{{ $comic->title}}</li>
            <li>{{ $comic->description}}</li>
            <li>{{ $comic->type}}</li>
          </ul>
        </div>
      @endforeach
    </div>
  </div>

@endsection