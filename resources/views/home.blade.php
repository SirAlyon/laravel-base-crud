@extends('layouts.app')

@section('content')
    <div class="home">
        <h1 class="mt-3">Explore Comics List</h1>
        <a href="{{route('comics.index')}}" class="btn btn-primary">EXPLORE NOW</a>
        <hr>

        
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-3 mt-5">
                <a href="{{route('comics.show', $comic->id)}}" class="comic">
                    <div class="title">{{$comic->title}}</div>
                <div>
                    <img class="my-1" src="{{$comic->thumb}}" alt="">
                </div>
                
                    
                <div class="my-2 price">${{$comic->price}}</div>
                <div class="my-2">{{$comic->series}}</div>
                <div class="my-2">{{$comic->type}}</div>
                </a>
            </div>

            @endforeach
        </div>
    </div>


@endsection