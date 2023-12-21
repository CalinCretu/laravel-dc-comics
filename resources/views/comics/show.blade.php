@extends('layouts.app')

@section('content')
    <section>
        <div class="container mt-5 d-flex">
            <div class="col text-start">
                <ul class="col d-flex flex-column">
                    <li>{{ $comic->title }}</li>
                    <li>{{ $comic->series }}</li>
                    <li class="text-uppercase">{{ $comic->type }}</li>
                    <li>{{ $comic->sale_date }}</li>
                    <li class="flex-grow-1">${{ $comic->price }}</li>
                    <li class="d-flex flex-column">
                        <div class="mb-2">
                            <a class="btn btn-primary" href="{{ route('comics.index') }}">Return</a>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col text-center mx-2">
                <img src="{{ $comic->thumb }}" width="300" alt="">
            </div>
            <div class="col">
                <div>{{ $comic->description }}</div>
            </div>
        </div>
    </section>
@endsection
