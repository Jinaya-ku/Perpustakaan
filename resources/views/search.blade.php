<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold mb-6">Search Books</h1>
        <form action="{{ route('search') }}" method="GET" class="mb-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <input type="text" name="title" placeholder="Title" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500">
                <input type="text" name="author" placeholder="Author" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500">
                <input type="text" name="genre" placeholder="Genre" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500">
                <input type="number" name="year" placeholder="Year" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>
            <button type="submit" class="mt-4 py-2 px-4 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full">Search</button>
        </form>
        <div>
            @if(isset($books))
                <h2 class="text-2xl font-bold mb-4">Search Results</h2>
                <ul>
                    @foreach($books as $book)
                        <li class="mb-2">{{ $book->title }} by {{ $book->author }} ({{ $book->year }}) - Genre: {{ $book->genre }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</body>
</html>

