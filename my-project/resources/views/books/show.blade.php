@extends('layouts.dashboard')

@section('content')
    <h1>Book Details</h1>
    <p>Name: {{ $book->name }}</p>
    <p>Description: {{ $book->description }}</p>
    <p>Price: ${{ $book->price }}</p>
    <p>Image: <img src="{{ $book->image }}" alt="Book Image"></p>
    <p>Author: {{ $book->author->name }}</p>
    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection