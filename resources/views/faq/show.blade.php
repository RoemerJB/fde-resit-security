@extends('layout')

@section('content')
    <h2>{{$faq->question}}</h2>
    <p>{{$faq->answer}}</p>
    <form method="get" action="/faq/{{ $faq->id }}/edit">
        <button type="submit">Edit</button>
    </form>
@endsection
