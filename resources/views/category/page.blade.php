@extends('layouts.app')

@section('title')

@endsection

@section('content')
    <div>
        <h1>{{ $category->title }}</h1>
    </div>
    <div>
        @foreach($posts as $post)
            <div>
                <a href="{{ route('post.page', ['post' => $post]) }}">
                    <h3>
                       {{ $post->title }} 
                    </h3>
                </a>
            </div>
            
            
        @endforeach
    </div>
    

@endsection

