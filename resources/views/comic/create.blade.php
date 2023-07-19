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
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" placeholder="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" type="text" placeholder="description" name="description">
            </div>
            <div class="form-group">
                <label for="thumb">Thumb</label>
                <input class="form-control" type="text" placeholder="thumb" name="thumb"
                    value="https://picsum.photos/200/300?random=1">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="text" placeholder="price" name="price">
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input class="form-control" type="text" placeholder="series" name="series">
            </div>
            <div class="form-group">
                <label for="sale_date">Sale date</label>
                <input class="form-control" type="date" placeholder="sale_date" name="sale_date">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input class="form-control" type="text" placeholder="type" name="type">
            </div>
            <div class="form-group">
                <label for="artists">Artists</label>
                <input class="form-control" type="text" placeholder="artists" name="artists">
            </div>
            <div class="form-group">
                <label for="writers">Writers</label>
                <input class="form-control" type="text" placeholder="writers" name="writers">
            </div>
            <button class="btn btn-primary my-5" type="submit">Create</button>
        </form>




        <a class="btn btn-primary" href="{{ route('comic.index') }}">Torna alla lista</a>
    </div>
@endsection
