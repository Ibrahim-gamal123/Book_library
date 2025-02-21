@extends('layouts.dashboard')

@section('content')
    <h1>Create New Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="image">Image URL:</label>
            <input type="text" name="image" id="image" required>
        </div>
        <div class="form-group">
            <label for="author_id">Author:</label>
            <select name="author_id" id="author_id" required>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection