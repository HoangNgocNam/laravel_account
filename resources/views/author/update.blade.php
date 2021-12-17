<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên tác giả" value="{{$author->name}}">
    <input type="text" name="country" placeholder="Nhập quê quán" value="{{$author->country}}">
    <button type="submit">Cap nhat tác giả</button>
    <a href="{{ route("authors.index") }}">quay lai</a>
</form>
