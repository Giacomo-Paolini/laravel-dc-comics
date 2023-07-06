@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            <form class="my-4" action="{{ route('comics.update', $comic->id)}}" method="POST">
                @csrf

                @method('PUT')

                <label for="title">Title</label>
                <input class="form-control" @error('title') is-invalid @enderror type="text" name="title" value="{{ old('title', $comic->title) }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="description">Description</label>
                <input class="form-control" @error('description') is-invalid @enderror type="description" name="description" value="{{ old('description', $comic->description) }}">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="thumb">Thumb</label>
                <input class="form-control" @error('thumb') is-invalid @enderror type="text" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                @error('thumb')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="price">Price</label>
                <input class="form-control" @error('price') is-invalid @enderror type="text" name="price" value="{{ old('price', $comic->price) }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="series">Series</label>
                <input class="form-control" @error('series') is-invalid @enderror type="text" name="series" value="{{ old('series', $comic->series) }}">
                @error('series')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="sale_date">Sale Date</label>
                <input class="form-control" @error('sale_date') is-invalid @enderror type="text" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                @error('sale_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                
                <label for="type">Type</label>
                <input class="form-control" @error('type') is-invalid @enderror type="text" name="type" value="{{ old('type', $comic->type) }}">
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                
                <label for="artists">Artists</label>
                <input class="form-control" @error('artists') is-invalid @enderror type="text" name="artists" value="{{ old('artists', $comic->artists) }}">
                @error('artists')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                
                <label for="writers">Writers</label>
                <input class="form-control" @error('writers') is-invalid @enderror type="text" name="writers" value="{{ old('writers', $comic->writers) }}">
                @error('writers')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <button class="form-control mt-3" type="submit">Edit Item</button>
            </form>
        </div>
    </div>
@endsection