@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label for="title">Title</label>
        <input type="text" id="title" name="title">

        <label for="content">Content</label>
        <textarea id="content" name="content"></textarea>

        <button type="submit">Create Post</button>
    </form>
@endsection
