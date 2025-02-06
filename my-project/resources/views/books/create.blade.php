@extends('Layout.master')

@section('title', 'Add Book')

@section('content')
    <h1>Create a New Book</h1>
    
    <a href="{{ route('dashboard') }}" class="btn-back">← Back to Dashboard</a>


    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('books.store') }}" method="POST" style="max-width: 500px; margin: auto; text-align: left;">
        @csrf
        <label for="name">Book Name:</label><br>
        <input type="text" name="name" id="name" required style="width: 100%; padding: 8px;"><br><br>

        <label for="description">Book Description:</label><br>
        <textarea name="description" id="description" required style="width: 100%; padding: 8px;"></textarea><br><br>

        <label for="price">Book Price:</label><br>
        <input type="number" name="price" id="price" step="0.01" required style="width: 100%; padding: 8px;"><br><br>

        <button type="submit" style="background: #28a745; color: white; padding: 10px 15px; border: none; cursor: pointer;">
            Create Book
        </button>
    </form>
@endsection
