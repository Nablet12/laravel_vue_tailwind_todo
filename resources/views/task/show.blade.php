@extends('layout')

@section('content')
<div><span class = "text-sm">Project Name: </span> <span class = "text-xl">{{ @$task -> project -> title }}</span></div>
<div class = "mb-5"><span class = "text-sm">Task Name: </span><span class = "text-xl">{{ $task -> title }}</span></div>
<div class = "mb-5"><span class = "text-sm">Task Number: # </span><span class = "text-xl">{{ $task -> id }}</span></div>
<div class = "mb-5"><span class = "text-sm">Status </span><span class = "text-xl">{{ $task -> status?'Done' : 'Not Yet' }}</span></div>
<a href="/task" class = "mb-2 py-1.5 px-3 rounded border border-gray-500 bg-gray-100 text-gray-800">Back To Main Task List</a>
@endsection