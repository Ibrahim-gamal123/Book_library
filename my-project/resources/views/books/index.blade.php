@extends('Layout.master')

@section('title', 'Dashboard')

@section('content')

<a href="{{ route('books.create') }}" class="btn">Create New Book</a>

<style>
    .btn {
        display: inline-block;
        background: linear-gradient(to right, #4CAF50, #45a049);
        color: white;
        font-size: 16px;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    }

    .btn:hover {
        background: linear-gradient(to right, #45a049, #4CAF50);
        transform: translateY(-2px);
        box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.3);
    }

    .btn:active {
        transform: translateY(1px);
        box-shadow: none;
    }
</style>
    <h2>All Books</h2>
    
    <table border="1" width="100%" style="text-align: left;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Book Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->description }}</td>
                    <td>${{ $book->price }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
