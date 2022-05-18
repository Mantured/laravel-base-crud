@extends('layouts.app')

@section('title', 'Home')

@section('main-content')
<section class="container text-center overflow-scroll my-height ">
    <div class="row g-2">
        @if($errors->any())
        <div class="alert alert-danger col-12">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif

        @if (session('deleted-message'))
        <div class="alert alert-warning col-12">
            {{ session('deleted-message') }}
        </div>
        @endif

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


