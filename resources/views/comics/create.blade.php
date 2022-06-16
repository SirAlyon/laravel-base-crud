@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="form-group mt-2">
          <label for="title">Comic Title:</label>
          <input type="text" name="title" id="title" class="form-control"  placeholder="Enter Comic Title">
        </div>
        <div class="form-group mt-2">
            <label for="description">Comic description:</label>
            <input type="text" name="description" id="description" class="form-control"  placeholder="Enter Comic description">
          </div>
        <div class="form-group mt-2">
          <label for="thumb">Comic Thumb:</label>
          <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Enter Comic Thumb">
        </div>
        <div class="form-group mt-2">
            <label for="price">Comic Price:</label>
            <input type="text" name="price" id="price" class="form-control"  placeholder="Enter Comic Price">
        </div>
        <div class="form-group mt-2">
            <label for="series">Comic Series:</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Enter Comic series">
        </div>
        <div class="form-group mt-2">
            <label for="sale_date">Comic Sale Date:</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Enter Comic Sale Date">
        </div>
        <div class="form-group mt-2">
            <label for="type">Comic Type:</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Enter Comic Type">
        </div>
    
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

@endsection