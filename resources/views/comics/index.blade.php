@extends('layouts.app')

@section('content')
<table class="w-100">
    <tr>
      <th>TITLE</th>
      <th>THUMB</th>
      <th>PRICE</th>
      <th>SERIES</th>
      <th>SALE_DATA</th>
      <th>TYPE</th>
    </tr>
    @foreach ($comics as $comic)
    <tr>
        <td>{{$comic->title}}</td>
        {{-- <td class="description">{{$comic->description}}</td> --}}
        <td>
            <img height="70" src="{{$comic->thumb}}" alt="">
        </td>
        <td>${{$comic->price}}</td>
        <td>{{$comic->series}}</td>
        <td>{{$comic->sale_date}}</td>
        <td>{{$comic->type}}</td>
        <td>
            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">View</a>
            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Edit</a>


            {{-- MODAL DELETE --}}
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-comic-{{$comic->id}}">DELETE</button>

            <div class="modal" tabindex="-1" id="delete-comic-{{$comic->id}}">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Delete {{$comic->title}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="text-center modal-body">
                    <p class="text-danger fs-3">IRREVERSIBLE ACTION!</p>
                    <p>Are you sure you want permanently delete <b>{{$comic->title}}</b>?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger">DELETE</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
            
            {{-- <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">DELETE</button>
            </form> --}}
        </td>
    </tr>
    @endforeach

    <tr>

    </tr>
  </table>
@endsection