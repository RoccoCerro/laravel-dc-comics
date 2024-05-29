@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-auto ms-auto">
      <a href="{{ route('comics.create') }}" class="btn btn-primary">Nuovo Fumetto</a>
    </div>
    <div class="row">
      @foreach ($comics as $comic)
        <div class="col-4">
          <ul>
            <li><a href="{{ route('comics.show', $comic) }}">{{ $comic->title }}</a></li>
            <li>{{ $comic->description}}</li>
            <li>{{ $comic->type}}</li>
          </ul>
        </div>
      @endforeach
    </div>
  </div>

@endsection