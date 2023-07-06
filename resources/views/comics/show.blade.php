@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="my-3 img-container">
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="p-3 d-flex flex-column justify-content-center align-items-center">
                <h5>{{ $comic->title }}</h5>
                <p>{{ $comic->description }}</p>
                <strong>{{ $comic->price }}</strong><br>
                <small>{{ $comic->series }}</small><br>
                <button class="p-2 mt-4 bg-dark"><a href="{{route('home')}}">Back to home</a></button>
                <button class="p-2 mt-4 bg-dark"><a href="{{route('comics.edit', $comic->id)}}">Edit</a></button>
            </div>
        </div>
    </div>
@endsection