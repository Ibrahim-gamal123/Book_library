<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Book</title>
</head>
<body>
    <h1>craete book</h1>
    
    
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="name"> Book Name:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="description">Book Description:</label><br>
        <textarea name="description" id="description" required></textarea><br><br>

        <label for="price">Book Price:</label><br>
        <input type="number" name="price" id="price" step="0.01" required><br><br>

        <button type="submit"> create book</button>
    </form>
</body>
</html>
