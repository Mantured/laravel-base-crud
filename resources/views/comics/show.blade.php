@extends('layouts.app')

@section('title', 'Comic Book')

@section('main-content')
<section class="container text-center my-height mb-2">
    <div class="row g-2 h-100 align-content-center">
        @if (session('message'))
        <div class="alert alert-success col-12">
            {{ session('message') }}
        </div>
        @endif
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
                <form action="{{route('comics.destroy', $comic)}}" class="col-3 blackhole" method="POST" comic-name="{{ucwords($comic->title)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
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

@section('footer-script')
    <script>
    const blackHole = document.querySelectorAll('.blackhole');
    blackHole.forEach(singleForm => {
        singleForm.addEventListener('submit', function (event) {
            event.preventDefault(); //acchiappo l'invio del form
            userConfirm = window.confirm(`Are You Sure To Delate ${this.getAttribute('comic-name')}`);
            if(userConfirm) {
                this.submit();
            }
        })
    });
    </script>
@endsection
