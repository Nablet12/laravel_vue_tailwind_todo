@extends('layout')

@section('content')
<form action="/task" method = "POST">
    @csrf
    <div>
        <label for="title"> Title </label>
        <input type="text" name = "title"/
        class = "rounded border border-gray-300 mr-1">
        <br>
        <label for="status"> Status </label>
        <input type="text" name = "status"/
        class = "rounded border border-gray-300 mr-1">
        <br>
        <label for="project_id"> Project ID </label>
        <input type="text" name = "project_id"/
        class = "rounded border border-gray-300 mr-1">
        <br>
    </div>
    <div>
        <label for="project_id">Project</label>
        <select name="project_id">
            @foreach ($projects as $project)
                <option value="{{ $project -> id }}">
                {{ $project -> title }}</option>
            @endforeach
        </select>
    </div>
        <button class = "p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" type = "submit"> Save </button>
    </form>
@endsection