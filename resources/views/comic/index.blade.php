@extends('layouts.main-layout')

@section('title')
    Comics
@endsection

@section('content')
    <div class="container text-center">
        <h1>i fumetti</h1>
        <ul class="list-unstyled">
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('comic.show', $comic->id) }}">
                        {{ $comic->title }}
                    </a>
                </li>
            @endforeach
        </ul>
        {{-- button new comic --}}
        <a class="btn btn-primary my-5" href="{{ route('comic.create') }}">Crea un nuovo fumetto</a>
    </div>
@endsection
