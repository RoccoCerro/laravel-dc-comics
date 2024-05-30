@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-auto ms-auto">
      <a href="{{ route('comics.create') }}" class="btn btn-primary">Nuovo Fumetto</a>
    </div>
    <div class="row">
      @foreach ($comics as $comic)
        <div class="col-12">
          <ul>
            <li><a href="{{ route('comics.show', $comic) }}">{{ $comic->title }}</a></li>
            <li>{{ $comic->description}}</li>
            <li>{{ $comic->type}}</li>
            <li><a href="{{ route('comics.edit', $comic) }}">Edit</a></li>
            <li>
              <form class="comics-delete-form" action="{{ route('comics.destroy', $comic) }}" method="POST">
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-link link-danger">Trash</button>

                <div class="d-none modal-delete" >
                  <h5>Sei sicuro di voler eliminare?</h5>
                  <button class="btn-yes">si</button>
                  <button class="btn-no">no</button>
                </div>
              </form>
            </li>
          </ul>
        </div>
      @endforeach
    </div>
  </div>

@endsection