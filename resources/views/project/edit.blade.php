@extends('layout')

@section('content')
<form action = "/project/ {{ $project -> id }}" method = "POST">
    @csrf
    @method('PUT')
    <div>
        <label for="title"> Title </label>
        <input type="text" value = "{{ $project -> title }}" name = "title"
        class = "rounded border border-gray-100 mr-1">
    </div>
        <button class = "p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" type = "submit"> Save </button>
    </form>
@endsection