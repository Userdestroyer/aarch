@extends('layouts.app')

@section('title')

@endsection

@section('content')

<section class="content__section">
    <div class="post__container">
        <h1>
            {{ $post->title }}
        </h1>
        <div>
            {{ $post->content }}
        </div>
    </div>
    
</section>

@endsection