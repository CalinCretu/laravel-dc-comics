@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Comic Title"
                        required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" name="description" id="description" placeholder="Comic Description"
                        required></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Comic Price"
                        oninput="validatePrice(this)" required>
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" name="series" id="series" placeholder="Comic Series"
                        required>
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="yyyy-mm-dd"
                        required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select type="text" class="form-control" name="type" id="type" placeholder="Comic Type"
                        required>
                        <option>Comic Book</option>
                        <option value="Comic Book">Comic Book</option>
                        <option value="Graphic Novel">Graphic Novel</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" value="Create">
                    <a href="{{ route('comics.index') }}" class="btn btn-primary">Return</a>
                </div>
            </form>
        </div>
    </section>
@endsection

<script>
    function validatePrice(input) {
        if (input.value < 0) {
            input.setCustomValidity('Price can\'t be less than 0');
        } else {
            input.setCustomValidity('');
        }
    }
</script>
