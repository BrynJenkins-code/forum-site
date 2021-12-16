@extends('layouts.app')

{{$comments = App\Models\Comment::where('post_id', $post->id)->get();}}

@section('header')
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif
@endsection

@section('content')
    <script src=https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <ul>
        <li>{{$post->post_title}}</li>
        <li>{{$post->post_content}}</li>
        <li>{{$post->views}}</li>
    </ul>
    <div id="commentForm">

    </div>

    <ul>

        @foreach ($comments as $comment)
            <li>{{$comment->comment}}</li>
        @endforeach
    </ul>
    <script>
        var app = new Vue((
            el:"commentForm",
            data:{
                message:""
        }
        ))
    </script>
@endsection
