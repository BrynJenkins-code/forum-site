@extends('layouts.app')

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


@section('content')
    <p> Posts:</p>
    <ul>
        @foreach ($posts as $post)
            <li> <a href="{{ route('comments.index', ['id' => $post->id ]) }}"> {{$post->post_title}} </a></li>
        @endforeach
    </ul>

