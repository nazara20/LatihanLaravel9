<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::latest()->get();
        return view('category.index', compact('category'));
    }

    public function categorydetail($id)
    {
        $categories = Category::findOrFail($id);
      return view('category.detail', compact('categories'));
    }

    public function buku()
    {
        $category = Category::latest()->get();
        return view('books.index', compact('category'));
    }

    public function bukudetail($slug)
    {
        $books = Books::withCount('Reviews')->whereSlug($slug)->firstOrFail();
        $reviews = $books->reviews()->with('user')->paginate(2);

      return view('books.detail', compact('books', 'reviews'));

    }

    public function user($id)
    {
      $user = User::whereId($id)->firstOrFail();
      $books = $user->books()->latest()->get();

      return view('book.user', compact('user', 'books'));
    }
}
