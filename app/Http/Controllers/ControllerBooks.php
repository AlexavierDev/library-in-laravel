<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class ControllerBooks extends Controller
{
    public function index()
    {
        // Return all books from database and send to view index
        new Books();

        $books = Books::all();

        return view('books.index', ['books' => $books]);
    }

    public function add()
    {
        // return view create new book form
        return view('books.create');
    }

    //store books in database
    public function store(Request $request)
    {

        //get all data from form
        $title = $request->input('title');
        $author = $request->input('author');
        $rating = $request->input('rating');
        $genre = $request->input('genre');
        $coment = $request->input('coment');

        // verifiy if file is uploaded and move to storage
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $extension = $cover->getClientOriginalExtension();
            $coverName = time() . '.' . $extension;
            $path = $cover->storeAs('covers', $coverName, 'public');
            $coverName = basename($path);
        } else {
            return "File not uploaded";
        }


        //save data in database trough model

        $books = new Books();

        $books->title = $title;
        $books->author = $author;
        $books->rating = $rating;
        $books->genre = $genre;
        $books->coment = $coment;
        $books->image = $coverName;

        $books->save();

        return redirect('/?suceess=true');
    }

    //edit book ( get book by id and send to view edit)
    public function edit($id)
    {

        $book =  Books::find($id);
        return view('books.edit', ['book' => $book]);
    }

    //update infos of book 
    public function update(Request $request, $id)
    {
        $comment =  $request->input('coment');
        $rating =  $request->input('rating');


        if ($request->hasFile('coverInput')) {
            $cover = $request->file('coverInput');
            $extension = $cover->getClientOriginalExtension();
            $coverName = time() . '.' . $extension;
            $coverPath = $cover->storeAs('covers', $coverName, 'public');
            $coverName = basename($coverPath);
        }

        //instance model with id and update 
        $book = Books::find($id);
        $book->coment = $comment;
        $book->Rating = $rating;

        //if cover is true update cover
        if(isset($coverName)){
            $book->image = $coverName;
        }
        $book->save();

        return redirect('/?update=true');
        

    }
}
