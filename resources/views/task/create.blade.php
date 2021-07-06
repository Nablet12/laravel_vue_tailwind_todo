@extends('layout')

@section('content')
<form action="/task" method = "POST">
    @csrf
    <div>
        <label for="title"> Title </label>
        <input type="text" name = "title"/>
        <br>
        <label for="status"> Status </label>
        <input type="text" name = "status"/>
        <br>
        <label for="project_id"> Project ID </label>
        <input type="text" name = "project_id"/>
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
        <button type = "submit"> Save </button>
    </form>
@endsection