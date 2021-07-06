@extends('layout')

@section('content')
<a href="/project/create" class = "mb-2 py-1.5 px-3 rounded border border-gray-500 bg-gray-100 text-gray-800"> New Project </a>
<table class = "w-full">
    <thead>
        <tr>
            <td>
                ID
            </td>
            <th>
                Title
            </th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)

        <tr>
            <td>
                {{ $project->id }}
            </td>
            <td class = "w-4/5 text-center">
                {{$project->title}}
            </td>
            <td>
                <div class = "flex">
                    <a class = "p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" href = "/project/{{  $project -> id }}" > Show </a> 
                    <a class = "p-1 m-1 rounded border border-blue-500 bg-blue-100 text-blue-800" href="/project/{{ $project -> id }}/edit"> Edit </a>
                    <form method = "POST" action="project/ {{ $project -> id }}">
                    @csrf
                    @method('DELETE')
                    <button type="Submit" class = "p-1 m-1 rounded border border-red-500 bg-red-100 text-red-800"> Delete </button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection