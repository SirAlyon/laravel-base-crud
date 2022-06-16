@extends('layouts.app')

@section('content')
    <div class="show">
        <div class="title">{{$comic->title}}</div>
        <div class="container">
            <div>
                <img class="my-3" src="{{$comic->thumb}}" alt="">
            </div>
            <div class="description my-2">{{$comic->description}}</div>
            
            <div class="my-2">${{$comic->price}}</div>
            <div class="my-2">{{$comic->series}}</div>
            <div class="my-2">{{$comic->sale_date}}</div>
            <div class="my-2">{{$comic->type}}</div>
        </div>
    </div>
@endsection