@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">Elenco dei Fumetti</h1>
            <div class="text-center">
                <button class="w-25 p-2 mt-4 bg-dark"><a href="{{route('comics.create')}}">Create Item</a></button>
            </div>
            <div class="d-flex flex-wrap justify-content-center p-5 gap-3">
                @foreach ($comics as $comic)
                <div class="card col-4 p-2">
                    <img class="card-image-top img-fluid" src="{{ $comic->thumb }}" alt="">
                    <div class="card-body">
                        <h5>{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->description }}</p>
                        <strong>{{ $comic->price }}</strong><br>
                        <small>{{ $comic->series }}</small><br>
                        <button class="p-2 mt-4 bg-dark"><a href="{{route('comics.show', $comic->id)}}">Show Item</a></button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
