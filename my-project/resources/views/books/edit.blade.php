@extends('layouts.dashboard')

@section('content')
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $book->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ $book->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" step="0.01" value="{{ $book->price }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image URL:</label>
            <input type="text" name="image" id="image" value="{{ $book->image }}" required>
        </div>
        <div class="form-group">
            <label for="author_id">Author:</label>
            <select name="author_id" id="author_id" required>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection