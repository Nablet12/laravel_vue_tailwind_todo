@extends('layout')

@section('content')
<div><span class = "text-sm">Project Name:</span> <span class = "text-xl">{{ $project -> title }}</span></div>
<div class = "mb-5"><span class = "text-sm">Project Number: #</span> <span class = "text-xl">{{ $project -> id }}</span></div>
<a href="/project" class = "mb-2 py-1.5 px-3 rounded border border-gray-500 bg-gray-100 text-gray-800">Back To Main Project List</a>
@endsection