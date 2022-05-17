@extends('layouts.app')

@section('title', 'Comic Book')

@section('main-content')
<section class="container text-center">
    <div class="row g-2">
        <div class="col-12">
            <div class="card text-start">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="cover of{{$comic->title}}">
                <div class="card-body">
                    <p class="card-text">{{$comic->description}}</p>
                    <p class="card-text">{{$comic->series}}</p>
                    <p class="card-text">{{$comic->sale_date}}</p>
                    <pre class="card-text">{{$comic->price}} $</pre>
                    <pre class="card-text">{{$comic->type}}</pre>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
