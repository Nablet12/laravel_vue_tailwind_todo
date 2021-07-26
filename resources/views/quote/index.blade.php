<a href = "/quote/create">New Quote</a>
<table>
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Quote
            </th>
        </tr>
        <tbody>
            @foreach ($quotes as $quote )
                <tr>
                    <td>
                        {{ $quote -> id }}
                    </td>
                    <td>
                        {{ $quote -> quote }}
                    </td>
                    <td>
                        <a href = "/quote/{{ $quote -> id }}">Show</a>
                        <a href = "/quote/{{ $quote -> quote }}">Edit</a>
                        <form method="POST" action ="quote/{{ $quote -> id }}">
                            @csrf
                            @method('DELETE')
                            <button type = "submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>