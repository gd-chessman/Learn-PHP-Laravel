@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Create a New Post</a>

    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
@endsection
