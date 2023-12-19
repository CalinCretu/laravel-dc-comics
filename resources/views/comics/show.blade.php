@extends('layouts.app')

@section('content')
    <section>
        <div class="container mt-5 d-flex">
            <div class="col text-start">
                <ul>
                    <li>{{ $comic->title }}</li>
                    <li>{{ $comic->series }}</li>
                    <li class="text-uppercase">{{ $comic->type }}</li>
                    <li>{{ $comic->sale_date }}</li>
                    <li>${{ $comic->price }}</li>
                    <li>
                        <a class="btn btn-primary" href="{{ route('comics.index') }}">Return</a>
                    </li>
                </ul>
            </div>
            <div class="col text-center">
                <img src="{{ $comic->thumb }}" width="300" alt="">
            </div>
            <div class="col">
                <div>{{ $comic->description }}</div>
            </div>
        </div>
    </section>
@endsection
