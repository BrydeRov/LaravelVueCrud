<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Requests\NoteCreateRequest;
use Inertia\Inertia;

class NoteController extends Controller
{

    public function index()
    {
        return Inertia::render('Note/index' , [
            'notes' => Note::latest()
            ->get()
        ]);
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

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
