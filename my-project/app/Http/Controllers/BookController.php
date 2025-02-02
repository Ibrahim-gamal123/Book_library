<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // عرض نموذج إضافة الكتاب
    public function create()
    {
        return view('books.create');
    }

    // حفظ الكتاب في قاعدة البيانات
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
}
