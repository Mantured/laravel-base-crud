@extends('layouts.app')

@section('title', 'Edit Comic Book')

@section('main-content')

<form action="{{ route('comics.update', ['comic' => $comic]) }}" method='post' class="h-100">
@csrf
@method('PUT')
    <div class="container h-100 ">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-8">
                <label for="thumb" class="size-label">Thumb</label>
                <input type="text" class="m-3" name="thumb" id="thumb" value="{{$comic->thumb}}">
            </div>
            <div class="col-8">
                <label for="title" class="size-label">Title</label>
                <input type="text" name="title" class="m-3" id="title" value="{{$comic->title}}">
            </div>

            <div class="col-8 d-flex">
                <label for="description" class="size-label align-self-center" >Description</label>
                <textarea name="description" class="m-3" id="description"> {{$comic->description}}</textarea>
            </div>

            <div class="col-8">
                <label for="type" class="size-label">Type</label>
                <input type="text" class="m-3" name="type" id="type" value="{{$comic->type}}">
            </div>

            <div class="col-8">
                <label for="series" class="size-label">Series</label>
                <input type="text" class="m-3" name="series" id="series" value="{{$comic->series}}">
            </div>
            <div class="col-8">
                <label for="price" class="size-label">Price</label>
                <input type="number"  min="0.00" max="10000.00" step="0.01" class="m-3 text-end" name="price" id="price" value="{{$comic->price}}">
                <span>$</span>
            </div>
            <div class="col-8">
                <label for="sale_date" class="size-label">Sale Date</label>
                <input type="text" class="m-3 text-center" name="sale_date" id="sale_date" placeholder="YY-MM-DD" value="{{$comic->sale_date}}">
            </div>

            <div class="col-8 text-center">
                <input type="submit" class="btn btn-warning" value="Submit">
            </div>
        </div>
    </div>
</form>

@endsection
