@extends('layout')

@section('content')

    <h1>Frequently Asked Questions</h1>

    @foreach($faq as $faq)
        <h2>
            <a href="/faq/{{ $faq->id }}">
                {{ $faq->question }}
            </a>
        </h2>
        {!! $faq->answer !!}
    @endforeach

@endsection
