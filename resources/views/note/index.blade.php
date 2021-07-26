@extends('layout')

@section('content')
<a href="/note/create" class = "mb-2 py-1.5 px-3 rounded border border-gray-500 bg-gray-100 text-gray-800">New Note</a>
<table>
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Content
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notes as $note)
        <tr>
            <td>
                {{ $note -> id }}
            </td>
            <td class = "w-4/5 text-center">
                {{ $note -> content }}
            </td>
            <td>
                <a class = "p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" href="/note/{{ $note->id }}">Show</a>
                <a class = "p-1 m-1 rounded border border-blue-500 bg-blue-100 text-blue-800" href="/note/{{ $note->id }}/edit">Edit</a>
                <form method="POST" action="note/{{ $note->id }}">
                @csrf
                @method('DELETE')
                <button type = "submit" class = "p-1 m-1 rounded border border-red-500 bg-red-100 text-red-800">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection