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

@push('other-scripts')
<script>
    document.addEventListener("DOMContentLoaded", function(){
        window.dataLayer.push({
        "ecommerce": {
            "currencyCode": "RUB",
            "<actionType>" : {
                "actionField" : <actionField>,
                "products": [
                {
                    "id": "{{ $post->getKey() }}",
                    "name" : "{{ $post->title }}",
                }
            }
        }
    });
    });
</script>
@endpush