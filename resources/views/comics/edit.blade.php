@extends('layouts.app')

@section('content')

<div class="container">
    {{-- Laravel Validation --}}

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group mt-2">
          <label for="title">Comic Title:</label>
          <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"  placeholder="Enter Comic Title" value="{{$comic->title}}" >
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="description">Comic description:</label>
            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror"  placeholder="Enter Comic description" value="{{$comic->description}}">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-2">
          <label for="thumb">Comic Thumb:</label>
          <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="Enter Comic Thumb" value="{{$comic->thumb}}">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="price">Comic Price:</label>
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror"  placeholder="Enter Comic Price" value="{{$comic->price}}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="series">Comic Series:</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="Enter Comic series" value="{{$comic->series}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="sale_date">Comic Sale Date:</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="Enter Comic Sale Date" value="{{$comic->sale_date}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="type">Comic Type:</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="Enter Comic Type" value="{{$comic->type}}">
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>

@endsection