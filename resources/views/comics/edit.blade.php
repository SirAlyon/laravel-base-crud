@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group mt-2">
          <label for="title">Comic Title:</label>
          <input type="text" name="title" id="title" class="form-control"  placeholder="Enter Comic Title" value="{{$comic->title}}">
        </div>
        <div class="form-group mt-2">
            <label for="description">Comic description:</label>
            <input type="text" name="description" id="description" class="form-control"  placeholder="Enter Comic description" value="{{$comic->description}}">
          </div>
        <div class="form-group mt-2">
          <label for="thumb">Comic Thumb:</label>
          <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Enter Comic Thumb" value="{{$comic->thumb}}">
        </div>
        <div class="form-group mt-2">
            <label for="price">Comic Price:</label>
            <input type="text" name="price" id="price" class="form-control"  placeholder="Enter Comic Price" value="{{$comic->price}}">
        </div>
        <div class="form-group mt-2">
            <label for="series">Comic Series:</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Enter Comic series" value="{{$comic->series}}">
        </div>
        <div class="form-group mt-2">
            <label for="sale_date">Comic Sale Date:</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Enter Comic Sale Date" value="{{$comic->sale_date}}">
        </div>
        <div class="form-group mt-2">
            <label for="type">Comic Type:</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Enter Comic Type" value="{{$comic->type}}">
        </div>
    
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>

@endsection