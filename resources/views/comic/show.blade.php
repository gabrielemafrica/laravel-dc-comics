@extends('layouts.main-layout')

@section('title')
    Show {{ $comic->id }}
@endsection

@section('content')
    <div class="container text-center py-5">
        <h1>{{ $comic->title }}</h1>
        <div class="container-img">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <ul class="list-unstyled">
            <li>{{ $comic->description }} </li>
            <li>{{ $comic->price }} </li>
            <li>{{ $comic->series }} </li>
            <li>{{ $comic->sale_date }} </li>
            <li>{{ $comic->type }} </li>
            <li>{{ $comic->artists }} </li>
            <li>{{ $comic->writers }} </li>
        </ul>

        <a class="btn btn-primary" href="{{ route('comic.index') }}">Torna alla lista</a>
    </div>
@endsection
