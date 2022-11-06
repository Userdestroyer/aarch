CATEGORIES
<div>
    <a href="{{ route('admin.category.addPage') }}">
        <button>
        Добавить категорию
        </button> 
    </a>
   
</div>

@foreach($categories as $category)
    <div>
       {{ $category->title }} 
    </div>
@endforeach