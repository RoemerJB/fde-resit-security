@extends('layout')

@section('content')

<h2>Create a FAQ</h2>

<form method="POST" action="/faq">
    @csrf

    <label for="question">Question</label><br>
    <input
        @error('question') is-danger @enderror
        type="text"
        id="question"
        name="question"
        value="{{ old('question') }}"><br><br>
    @error('question')
    <p class="help is-danger">{{ $errors->first('question') }}</p>
    @enderror

    <label for="answer">Answer:</label><br>
    <input
        @error('answer') is-danger @enderror
        type="text"
        id="answer"
        name="answer"
        value="{{ old('answer') }}"><br><br>
    @error('answer')
    <p class="help is-danger">{{ $errors->first('answer') }}</p>
    @enderror
    <input type="submit" value="Submit">
</form>

@endsection
