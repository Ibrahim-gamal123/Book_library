<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- المحتوى الرئيسي -->
    <div class="content">
        @yield('content')
    </div>
</body>
</html>