@extends('layouts.app')

@section('title')

@endsection

@section('content')
    <h1>
        {{ $post->title }}
    </h1>
    <div>
        {{ $post->content }}
    </div>

@endsection