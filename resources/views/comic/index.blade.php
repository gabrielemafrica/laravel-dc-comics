@extends('layouts.main-layout')

@section('title')
    Comics
@endsection

@section('content')
    <div class="container text-center">
        <h1>i fumetti</h1>
        <ul class="list-unstyled d-flex flex-column align-items-center gap-4">
            @foreach ($comics as $comic)
                <li class="element border border-info rounded w-25 py-4">
                    <div class="mb-2">
                        {{ $comic->title }}
                    </div>
                    <a class="btn btn-primary" href="{{ route('comic.show', $comic->id) }}">SHOW</a>
                    <a class="btn btn-info" href="{{ route('comic.edit', $comic->id) }}">EDIT</a>
                    <form class="d-inline" action="{{ route('comic.delete', $comic->id) }}" method="POST"
                        onsubmit="return confirmChoose()">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="DELETE">
                    </form>
                </li>
            @endforeach
        </ul>
        {{-- button new comic --}}
        <a class="btn btn-primary my-5" href="{{ route('comic.create') }}">Crea un nuovo fumetto</a>
    </div>
@endsection
