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
            <form class="my-4" action="{{ route('comics.store')}}" method="POST" class="needs-validation">
                @csrf

                <label for="title">Title</label>
                <input class="form-control mb-3" @error('title') is-invalid @enderror type="text" name="title">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="description">Description</label>
                <input class="form-control mb-3" @error('description') is-invalid @enderror type="description" name="description">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="thumb">Thumb</label>
                <input class="form-control mb-3" @error('thumb') is-invalid @enderror type="text" name="thumb">
                @error('thumb')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="price">Price</label>
                <input class="form-control mb-3" @error('price') is-invalid @enderror type="text" name="price">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="series">Series</label>
                <input class="form-control mb-3" @error('series') is-invalid @enderror type="text" name="series">
                @error('series')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="sale_date">Sale Date</label>
                <input class="form-control mb-3" @error('sale_date') is-invalid @enderror type="text" name="sale_date">
                @error('sale_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                
                <label for="type">Type</label>
                <input class="form-control mb-3" @error('type') is-invalid @enderror type="text" name="type">
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                
                <label for="artists">Artists</label>
                <input class="form-control mb-3" @error('artists') is-invalid @enderror type="text" name="artists">
                @error('artists')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                
                <label for="writers">Writers</label>
                <input class="form-control mb-3" @error('writers') is-invalid @enderror type="text" name="writers">
                @error('writers')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <button class="form-control mt-3" type="submit">New Item</button>
            </form>
        </div>
    </div>
@endsection