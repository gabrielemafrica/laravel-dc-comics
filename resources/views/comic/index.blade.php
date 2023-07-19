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
                        onsubmit="return confirmDelete()">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="DELETE">
                    </form>
                </li>
            @endforeach
        </ul>
        {{-- button new comic --}}
        <a class="btn btn-primary my-5" href="{{ route('comic.create') }}">Crea un nuovo fumetto</a>

        {{-- modal --}}

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
