@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <form action="{{ route('comics.update', $comic) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Comic Title" required
                        value="{{ old('title', $comic->title) }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" name="description" id="description" placeholder="Comic Description"
                        required>{!! old('description', $comic->description) !!}</textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Comic Price"
                        oninput="validatePrice(this)" required value="{{ old('price', $comic->price) }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" name="series" id="series" placeholder="Comic Series"
                        required value="{{ old('series', $comic->series) }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="yyyy-mm-dd"
                        required value="{{ old('sale_date', $comic->sale_date) }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select type="text" class="form-control" name="type" id="type" placeholder="Comic Type"
                        required>
                        <option @selected(old('type', $comic->type) === 'Comic Book') value='Comic Book'>Comic Book</option>
                        <option @selected(old('type', $comic->type) === 'Graphic Novel') value='Graphoc Novel'>Graphic Novel</option>

                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-warning" value="Edit">
                    <a href="{{ route('comics.index') }}" class="btn btn-primary">Return</a>
                </div>
            </form>
        </div>
    </section>
@endsection
