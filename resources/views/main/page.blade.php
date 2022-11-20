@extends('layouts.app')

@section('title')

@endsection

@section('content')
    <img class="background--image" src="{{ asset('images/main/background.jpg') }}" alt="">
    <div class="mainpage-content">
        <div class="main__categories--container">
            @foreach($categories as $category)
                <div class="item__box">
                    <a href="{{ route('category.page',['category' => $category]) }}">
                        <div class="main__category--image">

                        </div>
                        <div class="main__category--text">
                            {{ $category->title }}
                        </div>
                    </a>
                    
                </div>
        
                
            @endforeach
        </div>
    </div>

@endsection