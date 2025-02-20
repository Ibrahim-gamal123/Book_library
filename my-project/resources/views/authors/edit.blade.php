@extends('layouts.dashboard')

@section('content')
    <h1>Edit Author</h1>
    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $author->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $author->email }}" required>
        </div>
        <div class="form-group">
            <label for="jobdescription">Job Description:</label>
            <input type="text" name="jobdescription" id="jobdescription" value="{{ $author->jobdescription }}" required>
        </div>
        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea name="bio" id="bio" required>{{ $author->bio }}</textarea>
        </div>
        <div class="form-group">
            <label for="imageprofile">Profile Image URL:</label>
            <input type="text" name="imageprofile" id="imageprofile" value="{{ $author->imageprofile }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection