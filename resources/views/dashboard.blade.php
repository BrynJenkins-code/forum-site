@extends('layouts.app')
@section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

@section('content')


    <p> Your Posts:</p>
    <form action= "{{ route('posts.create') }}">
        <button tyoe="submit"> New Post</button>
    </form>

    <ul>
        @foreach ($posts as $post)
            <li> <a href="{{ route('comments.index', ['id' => $post->id ]) }}"> {{$post->post_title}} </a></li>
        @endforeach
    </ul>
