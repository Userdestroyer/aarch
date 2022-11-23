POSTS
<div>
    <a href="{{ route('admin.post.addPage') }}">
        <button>
        Добавить пост
        </button> 
    </a>
   
</div>

@foreach($posts as $post)
    <div>
       {{ $post->title }} 
    </div>
@endforeach