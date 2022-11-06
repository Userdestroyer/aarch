@extends('layouts.app')

@section('title')

@endsection

@section('content')
<img class="main__background--image" src="{{ asset('images/main/background.jpg') }}" alt="">
    <div class="mainpage-content">
        <div class="categories-container">
            @foreach($categories as $category)
                <div class="category__box">
                    <a href="{{ route('category.page',['category' => $category]) }}">
                        <div class="category__image">

                        </div>
                        <div class="category__text">
                            {{ $category->title }}
                        </div>
                    </a>
                    
                </div>
        
                
            @endforeach
        </div>
    </div>

@endsection