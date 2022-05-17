@extends('layouts.app')

@section('title', 'Home')

@section('main-content')
<section class="container text-center">
    <div class="row g-2">
        @foreach ($comics as $comic)
        <div class="col-4">
            <a href="{{ route('comics.show', $comic->id)}}">
                <div class="card text-start my-card">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="cover of{{$comic->title}}">
                    <div class="card-body my-card-body overflow-scroll">
                        <p class="card-text">{{$comic->description}}</p>
                        <p class="card-text">{{$comic->series}}</p>
                        <p class="card-text">{{$comic->sale_date}}</p>
                        <pre class="card-text">{{$comic->price}} $</pre>
                        <pre class="card-text">{{$comic->type}}</pre>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>
@endsection
