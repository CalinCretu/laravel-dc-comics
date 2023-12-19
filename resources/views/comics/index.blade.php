@extends('layouts.app')

@section('content')
    <section class="main-section">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Cover</th>
                        <th>Title</th>
                        {{-- <th>Series</th> --}}
                        {{-- <th>Description</th> --}}
                        <th>Type</th>
                        {{-- <th>Sale Date</th> --}}
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <td><img src="{{ $comic->thumb }}" width="160" alt=""></td>
                            <td>{{ $comic->title }}</td>
                            {{-- <td>{{ $comic->series }}</td> --}}
                            {{-- <td>{{ $comic->description }}</td> --}}
                            <td class="text-uppercase">{{ $comic->type }}</td>
                            {{-- <td>{{ $comic->sale_date }}</td> --}}
                            <td>${{ $comic->price }}</td>
                            <td><a class="btn btn-primary" href="{{ route('comics.show', $comic) }}">More Info</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td>
                                No comics found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
