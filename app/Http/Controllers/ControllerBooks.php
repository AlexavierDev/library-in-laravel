<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class ControllerBooks extends Controller
{
    public function index()
    {
        
        
        new Books();

        $books = Books::all();
        
        return view('books.index', ['books' => $books]);

    }

    public function add()
    {
        return view('books.create');
    }

    //store books in database
    public function store(Request $request)
    {
        $title = $request->input('title');
        $author = $request->input('author');
        $rating = $request->input('rating');
        $genre = $request->input('genre');

        $books = new Books();

        $books->title = $title;
        $books->author = $author;
        $books->rating = $rating;
        $books->genre = $genre;

        $books->save();

        return redirect('/?suceess=true');
    }
}
