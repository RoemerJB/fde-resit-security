@extends('layout')

@section('content')
    <h2>{{$article->title}}</h2>
    <p>{{$article->body}}</p>

    <form method="get" action="/article/edit">
        <button type="submit">Edit</button>
    </form>
@endsection
