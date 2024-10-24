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
        if($request->hasFile('cover')){
            $cover = $request->file('cover');
            $extension = $cover->getClientOriginalExtension();
            $coverName = time().'.'.$extension;
            $cover->move('storage\app\public\covers', $coverName);
        }else{
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
}
