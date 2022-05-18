@extends('layouts.app')

@section('title', 'New Comics Book')

@section('main-content')

<form action="{{route('comics.store')}}" method='post' class="h-100">
@csrf
        <div class="container h-100 ">
            {{-- <div class="row p-2">
                @if($errors->any())
                <div class="alert alert-danger col">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
            </div> --}}
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12">
                    <label for="thumb" class="size-label">Thumb</label>
                    <input type="text" class="m-3" name="thumb">
                    @error('thumb')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="title" class="size-label">Title</label>
                    <input type="text" name="title" class="m-3">
                    @error('title')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-12 d-flex">
                    <label for="description" class="size-label align-self-center">Description</label>
                    <textarea name="description" class="m-3"></textarea>
                    @error('description')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="type" class="size-label">Type</label>
                    <input type="text" class="m-3" name="type">
                    @error('type')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="series" class="size-label">Series</label>
                    <input type="text" class="m-3" name="series">
                    @error('series')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="price" class="size-label">Price</label>
                    <input type="number"  min="0.00" max="10000.00" step="0.01" class="m-3 text-end" name="price">
                    <span>$</span>
                    @error('price')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="sale_date" class="size-label">Sale Date</label>
                    <input type="text" class="m-3 text-center" name="sale_date" placeholder="YY-MM-DD">
                    @error('sale_date')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-4 text-center">
                    <input type="submit" class="btn btn-warning" value="Submit">
                </div>
            </div>
        </div>

</form>

@endsection
