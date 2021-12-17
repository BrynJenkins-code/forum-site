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
    <form method="POST" action="{{ route('posts.store') }}" id="postForm">
        @csrf
        <p>Post Title: <input type="text" name="post_title"></p>
        <p>Category:</p> <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Submit">
        <a href="{{ route('posts.index') }}">Cancel</a>
    </form>
    <textarea rows="4" cold="50" name="post_body" form="postForm">Enter text here.</textarea>
