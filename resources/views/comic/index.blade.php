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
                    {{ $comic->title }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
