<?php
namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::with('book')->get(); // استرجاع المؤلفين مع كتبهم
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email',
            'jobdescription' => 'required|string|max:255',
            'bio' => 'required|string',
            'imageprofile' => 'required|string|max:255',
        ]);

        Author::create($request->all());

        return redirect()->route('authors.index')
                         ->with('success', 'Author created successfully.');
    }

    // عرض تفاصيل مؤلف مع كتابه
    public function show($id)
    {
        $author = Author::with('book')->find($id); // استرجاع المؤلف مع كتابه
        if (!$author) {
            return redirect()->route('authors.index')->with('error', 'Author not found.');
        }
        return view('authors.show', compact('author'));
    }

    public function edit($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return redirect()->route('authors.index')->with('error', 'Author not found.');
        }
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email,' . $id,
            'jobdescription' => 'required|string|max:255',
            'bio' => 'required|string',
            'imageprofile' => 'required|string|max:255',
        ]);

        $author = Author::find($id);
        if (!$author) {
            return redirect()->route('authors.index')->with('error', 'Author not found.');
        }

        $author->update($request->all());

        return redirect()->route('authors.index')
                         ->with('success', 'Author updated successfully.');
    }

    // حذف مؤلف
    public function destroy($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return redirect()->route('authors.index')->with('error', 'Author not found.');
        }

        $author->delete();

        return redirect()->route('authors.index')
                         ->with('success', 'Author deleted successfully.');
    }
}