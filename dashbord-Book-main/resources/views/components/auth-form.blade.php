<!-- resources/views/components/auth-form.blade.php -->
@props(['action', 'method', 'title'])

<form 
    method="{{ strtoupper($method) === 'GET' ? 'GET' : 'POST' }}" 
    action="{{ $action }}"
    class="card shadow"
>
    @unless (in_array(strtoupper($method), ['GET', 'POST']))
        @method($method)
    @endunless

    @csrf

    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">{{ $title }}</h4>
    </div>

    <div class="card-body">
        {{ $slot }}
    </div>
</form>