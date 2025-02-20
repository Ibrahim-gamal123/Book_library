@extends('layouts.dashboard')

@section('content')
    <h1>Create New Author</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="jobdescription">Job Description:</label>
            <input type="text" name="jobdescription" id="jobdescription" required>
        </div>
        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea name="bio" id="bio" required></textarea>
        </div>
        <div class="form-group">
            <label for="imageprofile">Profile Image URL:</label>
            <input type="text" name="imageprofile" id="imageprofile" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection