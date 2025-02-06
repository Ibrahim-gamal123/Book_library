<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Show the dashboard
    public function dashboard()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
    // Show the book creation form
    public function create()
    {
        return view('books.create');
    }

    // Store a new book in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'price' => 'required|numeric|min:0',
        ]);

        Book::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('books.create')->with('success', 'Book added successfully!');
    }

    // Show all books
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
}
