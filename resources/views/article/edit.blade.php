@extends('layout')

@section('content')

    <h1>Edit Article</h1>

    <form method="POST" action="/article/{{ $article->id }}">
        @csrf
        @method('PUT')

        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" value="{{ $article->title }}"><br>
        <label for="excerpt">Excerpt</label><br>
        <input type="text" id="excerpt" name="excerpt" value="{{ $article->excerpt }}"><br>
        <label for="body">Body</label><br>
        <input type="text" id="body" name="body" value="{{ $article->body }}"><br>
        <input type="submit" value="Submit">
    </form>
    <form method="POST" action="/article/{{ $article->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

@endsection
