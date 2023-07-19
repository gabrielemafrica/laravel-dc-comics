@extends('layouts.main-layout')

@section('title')
    Create
@endsection

@section('content')
    <div class="container text-center py-5 w-25">
        <h1>Create new comic</h1>
        <form action="{{ route('comic.store') }}" method="POST">
            @csrf
            @method('POST')

            {{-- titolo --}}
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" placeholder="title" name="title"
                    class="@error('title') is-invalid @enderror">
                <br>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- description --}}
            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" type="text" placeholder="description" name="description"
                    class="@error('title') is-invalid @enderror">
                <br>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- thumb --}}
            <div class="form-group">
                <label for="thumb">Thumb</label>
                <input class="form-control" type="text" placeholder="thumb" name="thumb"
                    value="https://picsum.photos/200/300?random=1" class="@error('title') is-invalid @enderror">
                <br>
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- price --}}
            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="text" placeholder="price" name="price"
                    class="@error('title') is-invalid @enderror">
                <br>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- series --}}
            <div class="form-group">
                <label for="series">Series</label>
                <input class="form-control" type="text" placeholder="series" name="series"
                    class="@error('title') is-invalid @enderror">
                <br>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- sale_date --}}
            <div class="form-group">
                <label for="sale_date">Sale date</label>
                <input class="form-control" type="date" placeholder="sale_date" name="sale_date"
                    class="@error('title') is-invalid @enderror">
                <br>
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- type --}}
            <div class="form-group">
                <label for="type">Type</label>
                <input class="form-control" type="text" placeholder="type" name="type"
                    class="@error('title') is-invalid @enderror">
                <br>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- artists --}}
            <div class="form-group">
                <label for="artists">Artists</label>
                <input class="form-control" type="text" placeholder="artists" name="artists"
                    class="@error('title') is-invalid @enderror">
                <br>
                @error('artists')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- writers --}}
            <div class="form-group">
                <label for="writers">Writers</label>
                <input class="form-control" type="text" placeholder="writers" name="writers"
                    class="@error('title') is-invalid @enderror">
                <br>
                @error('writers')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- button --}}
            <button class="btn btn-primary my-5" type="submit">Create</button>
        </form>




        <a class="btn btn-primary" href="{{ route('comic.index') }}">Torna alla lista</a>
    </div>
@endsection
