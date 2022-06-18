@extends('layout')

@section('content')

    <h1>Frequently Asked Questions</h1>
    <form method="get" action="/faq/create">
        <button type="submit">Ask a question</button>
    </form>

    @foreach($faq as $faq)
        <h2>
            <a href="/faq/{{ $faq->id }}">
                {{ $faq->question }}
            </a>
        </h2>
        {!! $faq->answer !!}
    @endforeach

@endsection
