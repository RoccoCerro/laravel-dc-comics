@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-auto ms-auto">
      <a href="{{ route('comics.create') }}" class="btn btn-primary">Nuovo Fumetto</a>
    </div>
    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Thumb</th>
          <th>Price</th>
          <th>Series</th>
          <th>Date</th>
          <th>Type</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
            <tr>
              <td><a href="{{ route('comics.show', $comic) }}">{{ $comic->title }}</a></td>
              <td>{{ $sub_str_description = substr($comic->description, 0, 50)}}</td>
              <td><a href="">{{ $sub_str_thumb = substr($comic->thumb, 0, 15) }}...</a></td>
              <td>{{ $comic->price}}</td>
              <td>{{ $comic->series}}</td>
              <td>{{ $comic->sale_date}}</td>
              <td>{{ $comic->type}}</td>
              <td><a href="{{ route('comics.edit', $comic) }}">Edit</a></td>
              <td>
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
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>

  </div>

@endsection