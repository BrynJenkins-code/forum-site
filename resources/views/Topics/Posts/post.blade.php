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
@endsection

@section('content')

    <script src=https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>



    <script>
        var app = new Vue((
            el:"#root",
            data:{
                comments: [],
                newComment:"",
                postIid: 0,
                userId: 0,
            },
            methods: {
                function postComment(){
            axios.post("{{ route('api.comments.store')}}",{
                    comment:this.newComment,
                    postId: this.postId,
                    userId: this.userId
                })
                .then(response=>{
                    this.comments.push(response.data.newComment);
                    this.newComment='';
                    this.postId = {postId};
                    this.userId = {userId};
                })
                .catch(response=>{
                    console.log(response);
                })
            }
            }
            mounted(){
    axios.get("(( route ('api.comments.index') ))")
                .then(response => {
                    this.comments = response.data;
                })
                .catch(response => {
                    console.log(response);
                })
            }
        ));
    </script>
    <div id="root">
        Comment: <input type="text" id="input"
                        v-model="newComment">
        <button onclick="postComment()"> Post</button>

        <ul>
            <li v-for="comment in comments"> @{{ comment.comment }} </li>
        </ul>
    </div>
@endsection
