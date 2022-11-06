<form method="post" action="{{ route('admin.category.add') }}">
    @csrf
    <div>
        <p>Название категории</p>
        <input type="text" name="title" class="form-control" required="">
    </div>
    <div>
        <p>Описание категории</p>
        <input type="text" name="desc" class="form-control">
    </div>
    <button type="submit">SUBMIT</button>
</form>