@extends('layouts.app')

@section('title', 'Comic Book')

@section('main-content')
<section class="container text-center h-100">
    <div class="row g-2 h-100 align-content-center">
        <div class="col-12">
            <h1>{{$comic->title}}</h1>
        </div>
        <div class="col-12">
            <div class="card text-start p-3 bg-dark text-white">
                <img src="{{$comic->thumb}}" class="card-img-top align-self-center my-show-img
                " alt="cover of{{$comic->title}}">
                <div class="card-body">
                    <p class="card-text">Description: {{$comic->description}}</p>
                    <p class="card-text">Comic Series: {{$comic->series}}</p>
                    <p class="card-text text-warning">Sale date: {{$comic->sale_date}}</p>
                    <pre class="card-text text-warning">Price: {{$comic->price}} $</pre>
                    <pre class="card-text">Type of comic book: {{$comic->type}}</pre>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row justify-content-around">
                <div class="col-3">
                    <a href="{{route('comics.show', $comic->id - 1)}}">
                        <button class="btn btn-success">Previus</button>
                    </a>
                </div>
                <div class="col-3">
                    <a href="{{route('comics.edit', $comic)}}">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                </div>
                <div class="col-3">
                    <a href="{{route('comics.show', $comic->id + 1)}}">
                        <button class="btn btn-success">Next</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
