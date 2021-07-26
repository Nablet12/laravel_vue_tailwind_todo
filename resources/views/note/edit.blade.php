@extends('layout')

@section('content')
<form action="/note/{{ $note->id }}" method = "POST">
    @csrf
    @method('PUT')
    <div>
    
        <label for="content">Content</label>
        <textarea value = "{{ $note->content }}" name = "content"
        class = "rounded border border-gray-100 mr-1">
        </textarea>
    
    </div>
    <button class="p-1 m-1 rounded border border-green-500 bg-green-100 text-geen-800" type = "submit">Save</button>
    </form>
@endsection