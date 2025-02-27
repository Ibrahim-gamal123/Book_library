@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-auth-form action="{{ route('login') }}" method="POST" title="Login ">
                <x-error-alert :errors="$errors" />

                <div class="mb-3">
                    <label for="email" class="form-label"> Email</label>
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

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary w-100"> submit</button>
            </x-auth-form>
        </div>
    </div>
</div>
@endsection