<form method="post" action="{{ route('admin.post.add') }}">
    @csrf
    <div>
        <p>Категория поста</p>
        <input type="text" name="category_id" class="form-control" required="">
    </div>
    <div>
        <p>Заголовок поста</p>
        <input type="text" name="title" class="form-control" required="">
    </div>
    <div>
        <p>Текст поста</p>
        <input type="text" name="content" class="form-control">
    </div>
    <button type="submit">SUBMIT</button>
</form>