@extends('layouts.main-layout')

@section('title')
    Edit {{ $comic->id }}
@endsection

@section('content')
    <div class="container text-center py-5 w-25">
        <h1>Edit comic</h1>
        <form action="{{ route('comic.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" placeholder="title" name="title" value="{{ $comic->title }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" type="text" placeholder="description" name="description"
                    value="{{ $comic->description }}">
            </div>
            <div class="form-group">
                <label for="thumb">Thumb</label>
                <input class="form-control" type="text" placeholder="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="text" placeholder="price" name="price" value="{{ $comic->price }}">
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input class="form-control" type="text" placeholder="series" name="series" value="{{ $comic->series }}">
            </div>
            <div class="form-group">
                <label for="sale_date">Sale date</label>
                <input class="form-control" type="date" placeholder="sale_date" name="sale_date"
                    value="{{ $comic->sale_date }}">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input class="form-control" type="text" placeholder="type" name="type" value="{{ $comic->type }}">
            </div>
            <div class="form-group">
                <label for="artists">Artists</label>
                <input class="form-control" type="text" placeholder="artists" name="artists"
                    value="{{ $comic->artists }}">
            </div>
            <div class="form-group">
                <label for="writers">Writers</label>
                <input class="form-control" type="text" placeholder="writers" name="writers"
                    value="{{ $comic->writers }}">
            </div>
            <button class="btn btn-info my-5" type="submit" onclick="return confirmChoose()">UPDATE</button>
        </form>
        <a class="btn btn-primary" href="{{ route('comic.index') }}">Torna alla lista</a>
    </div>
@endsection
