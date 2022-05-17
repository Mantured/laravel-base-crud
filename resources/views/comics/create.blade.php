@extends('layouts.app')

@section('title', 'New Comics Book')

@section('main-content')

<form action="{{route('comics.store')}}" method='post' class="h-100">
@csrf
        <div class="container h-100 ">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-8">
                    <label for="thumb" class="size-label">Thumb</label>
                    <input type="text" class="m-3" name="thumb">
                </div>
                <div class="col-8">
                    <label for="title" class="size-label">Title</label>
                    <input type="text" name="title" class="m-3">
                </div>

                <div class="col-8">
                    <label for="description" class="size-label">Description</label>
                    <textarea name="description" class="m-3"></textarea>
                </div>

                <div class="col-8">
                    <label for="type" class="size-label">Type</label>
                    <input type="text" class="m-3" name="type">
                </div>

                <div class="col-8">
                    <label for="series" class="size-label">Series</label>
                    <input type="text" class="m-3" name="series">
                </div>
                <div class="col-8">
                    <label for="price" class="size-label">Price</label>
                    <input type="number" class="m-3" name="price">
                </div>
                <div class="col-8">
                    <label for="sale_date" class="size-label">Sale Date</label>
                    <input type="text" class="m-3" name="sale_date">
                </div>

                <div class="col-8 text-center">
                    <input type="submit" class="btn btn-warning" value="Submit">
                </div>
            </div>
        </div>

</form>

@endsection
