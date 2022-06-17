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
            <a href="{{route('comics.show', $comic->id)}}">View</a>
            <a href="{{route('comics.edit', $comic->id)}}">Edit</a>

            
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach

    <tr>

    </tr>
  </table>
@endsection