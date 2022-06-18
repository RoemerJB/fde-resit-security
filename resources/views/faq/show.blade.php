@extends('layout')

@section('content')
    <h2>{{$faq->question}}</h2>
    <p>{{$faq->answer}}</p>
@endsection
