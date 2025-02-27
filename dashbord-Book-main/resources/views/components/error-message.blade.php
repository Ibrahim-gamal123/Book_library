<!-- resources/views/components/error-message.blade.php -->
@props(['message'])

@if ($message)
    <div class="alert alert-danger mt-3">
        {{ $message }}
    </div>
@endif