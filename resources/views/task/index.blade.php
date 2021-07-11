@extends('layout')

@section('content')
<a href="/task/create" class = "mb-2 py-1.5 px-3 rounded border border-gray-500 bg-gray-100 text-gray-800"> New Task </a>
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
                Project
            </th>
            <th>
                Status
            </th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)

        <tr>
            <td>
                {{ $task -> id }}
            </td>
            <td class = "w-4/5 text-center">
                {{ $task -> title}}
            </td>
            <td>
                {{  @$task -> project -> title}}
            </td>
            <td>
                {{ $task -> status?'Done' : 'Not Yet' }}
            </td>
            <td>
                <div class = flex>
                <a class = "p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" href = "/task/{{  $task -> id }}" > Show </a> 
                <a class = "p-1 m-1 rounded border border-blue-500 bg-blue-100 text-blue-800" href="/task/{{ $task -> id }}/edit"> Edit </a>
                <form method = "POST" action="task/ {{ $task -> id }}">
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
