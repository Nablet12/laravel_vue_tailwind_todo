@extends('layout')

@section('content')
<div><span class = "text-sm">ID: </span> <span class = "text-xl"> {{ $note -> id }}</span></div>
<div><span class = "mb-5"><span class = "text-sm">Content: </span><span class = "text-xl"> {{ $note -> content }}</span></div>
<a href="/note" class = "mb-2 py-1.5 px-3 rounded border border-gray-500 bg-gray-100 text-gray-800">Back To Main Note List</a>
@endsection
