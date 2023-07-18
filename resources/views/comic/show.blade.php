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
            <li> {{ $comic->description }} </li>
            <li> {{ $comic->price }} </li>
            <li> {{ $comic->series }} </li>
            <li> {{ $comic->sale_date }} </li>
            <li> {{ $comic->type }} </li>
            {{--
            <li> {{ $comic->artists }} </li>
            <li> {{ $comic->writers }} </li>
            --}}
            <li>
                <div class="container d-flex justify-content-center gap-5">

                    <div>
                        <strong>Artists:</strong>
                        <ul class="list-unstyled">
                            @foreach (explode(',', $comic->artists) as $artist)
                                <li>{{ trim($artist) }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div>
                        <strong>Writers:</strong>
                        <ul class="list-unstyled">
                            @foreach (explode(',', $comic->writers) as $writer)
                                <li>{{ trim($writer) }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </li>
        </ul>

        <a class="btn btn-primary" href="{{ route('comic.index') }}">Torna alla lista</a>
        <a class="btn btn-info" href="{{ route('comic.edit', $comic->id) }}">EDIT</a>
        <form class="d-inline" action="{{ route('comic.delete', $comic->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="DELETE">
        </form>
    </div>
@endsection
