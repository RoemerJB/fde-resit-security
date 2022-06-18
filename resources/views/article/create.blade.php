@extends('layout')

@section('content')

    <h1>New Article</h1>

    <form method="POST" action="/article">
        @csrf

        <label for="title">Title</label><br>
        <input
            @error('title') is-danger @enderror
            type="text"
            id="title"
            name="title"
            value="{{ old('title') }}"><br><br>
        @error('title')
        <p class="help is-danger">{{ $errors->first('title') }}</p>
        @enderror

        <label for="excerpt">Excerpt</label><br>
        <input @error('excerpt') is-danger @enderror
            type="text"
            id="excerpt"
            name="excerpt"
            value="{{ old('excerpt') }}"><br><br>
        @error('excerpt')
        <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
        @enderror

        <label for="body">Body</label><br>
        <input @error('body') is-danger @enderror
            type="text"
            id="body"
            name="body"
            value="{{ old('body') }}"><br><br>
        @error('body')
        <p class="help is-danger">{{ $errors->first('body') }}</p>
        @enderror

        <input type="submit" value="Submit">
    </form>

    @endsection
