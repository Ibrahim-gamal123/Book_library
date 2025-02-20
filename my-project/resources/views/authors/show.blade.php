@extends('layouts.dashboard')

@section('content')
    <h1>Author Details</h1>
    <p>Name: {{ $author->name }}</p>
    <p>Email: {{ $author->email }}</p>
    <p>Job Description: {{ $author->jobdescription }}</p>
    <p>Bio: {{ $author->bio }}</p>
    <p>Profile Image: <img src="{{ $author->imageprofile }}" alt="Profile Image"></p>
    <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection