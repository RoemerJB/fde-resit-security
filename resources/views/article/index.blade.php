@extends('layout')

@section('content')
    <form method="get" action="/article/create">
        <button type="submit">Post an article</button>
    </form>

    @foreach($article as $article)
    <h2>
        <a href="/article/{{ $article->id }}">
            {{ $article->title }}
        </a>
    </h2>
    {!! $article->excerpt !!}
    @endforeach

@endsection
