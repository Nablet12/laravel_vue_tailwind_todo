<a href="/note/create">New Note</a>
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
            <td>
                {{ $note -> content }}
            </td>
            <td>
                <a href="/note/{{ $note->id }}">Show</a>
                <a href="/note/{{ $note->id }}/edit">Edit</a>
                <form method="POST" action="note/{{ $note->id }}">
                @csrf
                @method('DELETE')
                <button type = "submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>