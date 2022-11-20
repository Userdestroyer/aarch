@extends('layouts.app')

@section('title')

@endsection

@section('content')
    <div class="category__title">
        <h1>{{ $category->title }}</h1>
    </div>
    <div class="mainpage-content">
        <div class="category__posts--container">
            @foreach($posts as $post)
                <div class="item__box">
                    <a href="{{ route('post.page', ['post' => $post]) }}">
                        <div class="main__category--image">

                        </div>
                        <div class="main__category--text">
                            {{ $post->title }}
                        </div>
                    </a>
                </div>    
            @endforeach
        </div>
    </div>

@endsection

