<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function dashboard()
    {
        return view('dashboard'); // تأكد من وجود ملف dashboard.blade.php في مجلد views
    }
    public function index()
    {
        $books = Book::with('author')->get(); // استرجاع الكتب مع مؤلفيها
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all(); // استرجاع جميع المؤلفين لربط الكتاب بأحدهم
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id', // التحقق من وجود author_id
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
                         ->with('success', 'Book created successfully.');
    }

    // عرض تفاصيل كتاب مع مؤلفه
    public function show($id)
    {
        $book = Book::with('author')->find($id); // استرجاع الكتاب مع مؤلفه
        if (!$book) {
            return redirect()->route('books.index')->with('error', 'Book not found.');
        }
        return view('books.show', compact('book'));
    }

    // عرض نموذج تعديل كتاب
    public function edit($id)
    {
        $book = Book::find($id);
        $authors = Author::all(); // استرجاع جميع المؤلفين لربط الكتاب بأحدهم
        if (!$book) {
            return redirect()->route('books.index')->with('error', 'Book not found.');
        }
        return view('books.edit', compact('book', 'authors'));
    }

    // تحديث بيانات كتاب
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id', // التحقق من وجود author_id
        ]);

        $book = Book::find($id);
        if (!$book) {
            return redirect()->route('books.index')->with('error', 'Book not found.');
        }

        $book->update($request->all());

        return redirect()->route('books.index')
                         ->with('success', 'Book updated successfully.');
    }

    // حذف كتاب
    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return redirect()->route('books.index')->with('error', 'Book not found.');
        }

        $book->delete();

        return redirect()->route('books.index')
                         ->with('success', 'Book deleted successfully.');
    }
}