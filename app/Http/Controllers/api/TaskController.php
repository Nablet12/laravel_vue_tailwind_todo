<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        return response(Task::select('id', 'title', 'project_id', 'status')->get(), 200);
    }

    public function store(Request $request) {
        $task = Task::create($request->only('title', 'project_id', 'status'));
        return response(compact('task'), 201);
    }

    public function update($id, Request $request) {
        $task = Task::find($id);
        $task->update($request->only('title'));
        return response('Success', 201);
    }

    public function delete($id) {
        $task = Task::find($id);
        $task->delete();
        return response('Deleted', 201);
    }
}
