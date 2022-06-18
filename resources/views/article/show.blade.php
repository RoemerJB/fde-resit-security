@extends('layout')

@section('content')
    <h1>{{$article->id}}</h1>
    <h2>{{$article->title}}</h2>
    <p>{{$article->body}}</p>
@endsection
