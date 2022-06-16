@extends('layouts.app')

@section('content')
<table class="w-100">
    <tr>
      <th>TITLE</th>
      <th>DESCRIPTION</th>
      <th>THUMB</th>
      <th>PRICE</th>
      <th>SERIES</th>
      <th>SALE_DATA</th>
      <th>TYPE</th>
    </tr>
    @foreach ($comics as $comic)
    <tr>
        <td>{{$comic->title}}</td>
        <td>{{$comic->description}}</td>
        <td>{{$comic->thumb}}</td>
        <td>{{$comic->price}}</td>
        <td>{{$comic->series}}</td>
        <td>{{$comic->sale_date}}</td>
        <td>{{$comic->type}}</td>



    </tr>
    @endforeach

    <tr>

    </tr>
  </table>
@endsection