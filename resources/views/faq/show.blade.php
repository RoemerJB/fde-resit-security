@extends('layout')

@section('content')
    <h2>{{$faq->question}}</h2>
    <p>{{$faq->answer}}</p>
    <form method="get" action="/faq/{{ $faq->id }}/edit">
        <button type="submit">Edit</button>
    </form>
    <form method="POST" action="/faq/{{ $faq->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
