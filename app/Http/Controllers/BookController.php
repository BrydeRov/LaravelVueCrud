<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookController extends Controller
{

    public function index(Request $request)
    {
        $books = Book::when($request->term , function($query, $term){
            $query->where('title' , 'LIKE' , '%' . $term . '%');
        })
        ->latest()
        ->get();

        return Inertia::render('Book/index' , compact('books'));
    }


    public function create()
    {
        return Inertia::render('Book/create');
    }

    public function store(BookCreateRequest $request, Book $book)
    {
        if(request()->hasFile('image')){
            $book->$request->file('image')->store('BookImage' , 'public');
        }
        Book::create($request->validated());
        return redirect(route('books.index'));
    }

    public function show(Book $book)
    {
        return Inertia::render('Book/show' , compact('book'));
    }

    public function edit(Book $books)
    {
        //
    }

    public function update(Request $request, Book $books)
    {
        //
    }

    public function destroy(Book $books)
    {
        //
    }
}
