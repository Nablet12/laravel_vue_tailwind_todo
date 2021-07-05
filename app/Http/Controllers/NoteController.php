<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index() {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create() {
        $notes = Note::select(['id', 'content'])->get();
        return view('note.create', compact('notes'));
    }

    public function store(Request $request) {
        $note = Note::create($request->all());
        return redirect ('note');
    }

    public function show($id) {
        $note = Note::find($id);
        return view ('note.show', compact('note'));
    }

    public function edit($id) {
        $note = Note::find($id);
        return view ('note.edit', compact('note'));
    }

    public function update( $id,Request $request) {
        $note = Note::find($id);
        $note->update($request->all());
        return redirect ('note/'.$id);
    }

    public function destroy ($id) {
        Note::find($id) -> delete();
        return redirect('note');
    }
}
