@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-auth-form action="{{ route('register') }}" method="POST" title="Register "> 
                <x-error-alert :errors="$errors" />

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                           id="name" name="name" required>
                    <x-error-message :message="$errors->first('name')" />
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                           id="email" name="email" required>
                    <x-error-message :message="$errors->first('email')" />
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password </label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                           id="password" name="password" required>
                    <x-error-message :message="$errors->first('password')" />
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password  </label>
                    <input type="password" class="form-control" 
                           id="password_confirmation" name="password_confirmation" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>
            </x-auth-form>
        </div>
    </div>
</div>
@endsection