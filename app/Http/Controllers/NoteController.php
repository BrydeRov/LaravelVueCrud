<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\NoteCreateRequest;
use Inertia\Inertia;

class NoteController extends Controller
{

    public function index()
    {

        $notes = Note::latest()->get();

        return Inertia::render('Note/index', compact('notes'));
    }

    public function create()
    {   
        return Inertia::render('Note/create');
    }

    public function store(NoteCreateRequest $request)
    {
        Note::create($request->validated());
        return redirect(route('notes.index'));
    }


    public function show(Note $note)
    {
        return Inertia::render('Note/show' , compact('note'));
    }

    public function edit(Note $note)
    {
        return Inertia::render('Note/edit' , compact('note'));
    }

    public function update(NoteCreateRequest $request, Note $note)
    {   
        $note -> update($request->validated());
        return redirect(route("notes.show" , compact('note')));
    }
    
    public function destroy(Note $note)
      {
        // $notes->delete();

        // return redirect(Inertia::render(route('notes.index'))); 
    }
}
