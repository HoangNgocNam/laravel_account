<a href="{{ route("authors.index") }}">quay lai</a>
<table border="1px">
    <theard>
        <tr>
            <th>ID</th>
            <th>Ten tac gia</th>
            <th>Que quan</th>
        </tr>
    </theard>
    <tbody>
    <tr>
        <td>{{ $author->id }}</td>
        <td>{{ $author->name }}</td>
        <td>{{ $author->country }}</td>
    </tr>
    </tbody>
</table>
