<?php

namespace App\Http\Controllers;

use App\Models\Books;
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
        $books = Books::whereSlug($slug)->firstOrFail();

      return view('books.detail', compact('books'));
    }
}
