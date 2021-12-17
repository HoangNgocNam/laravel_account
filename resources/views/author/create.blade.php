<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên tác giả">
    <input type="text" name="country" placeholder="Nhập quê quán">
    <button type="submit">Thêm tác giả</button>
    <a href="{{ route("authors.index") }}">quay lai</a>
</form>
