<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tac gia</title>
</head>
<body>
<h1>Danh sach tac gia </h1>
<a href="{{ route("authors.showFormCreate") }}">Them moi</a>
<table border="1px">
    <theard>
        <tr>
            <th>ID</th>
            <th>Ten tac gia</th>
            <th>Que quan</th>
            <th colspan="3">Action</th>
        </tr>
    </theard>
    <tbody>
    @foreach($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>{{ $author->country }}</td>
            <td><a href="{{ route("authors.show", $author->id) }}">Delail</a></td>
            <td><a href="{{ route("authors.update", $author->id) }}">Update</a></td>
            <td><a onclick="return confirm('Ban co muon xoa khong?')" href="{{ route("authors.delete", $author->id) }}">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
