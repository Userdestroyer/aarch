@extends('layouts.app')

@section('title')

@endsection

@section('content')
    <div>
        <h1>{{ $category->title }}</h1>
    </div>
    <div>
        @foreach($posts as $post)
            <a href="{{ route('post.page', ['post' => $post]) }}">{{ $post->title }}</a>
            
        @endforeach
    </div>
    

@endsection

