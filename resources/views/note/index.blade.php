<a href="/note/create">New Note</a>
<table>
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Title
            </th>
            <th>
                Content
            </th>
            <th>
                Important
            </th>
            <th>
                Created at
            </th>
            <th>
                Updated at
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
                {{ $note -> title }}
            </td>
            <td>
                {{ $note -> content }}
            </td>
            <td>
                {{ $note -> important }}
            </td>
            <td>
                {{ $note -> created_at }}
            </td>
            <td>
                {{ $note -> updated_at }}
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