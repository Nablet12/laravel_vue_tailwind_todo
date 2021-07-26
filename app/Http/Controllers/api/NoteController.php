<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index() {
        return response(Note::select('id', 'content')->get(), 200);
    }

    public function store(Request $request) {
        $note = Note::create($request->only('id','content'));
        return response(compact('note'), 201);
    }

    public function update($id, Request $request) {
        $note = Note::find($id);
        $note->update($request->only('content'));
        return response('Success', 201);
    }

    public function delete($id) {
        $note = Note::find($id);
        $note->delete();
        return response('Deleted', 201);
    }
}
