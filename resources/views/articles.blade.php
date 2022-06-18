@extends('layout')

@section('content')
    @foreach($article as $article)
        <li>
            <h3>{{ $article->title }}</h3>
            <p><a href="/article/{{$article->id}}">{{ $article->excerpt }}</a></p>
        </li>
    @endforeach
@endsection
