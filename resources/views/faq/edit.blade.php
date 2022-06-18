@extends('layout')

@section('content')
    <h1>Edit FAQ</h1>

    <form method="POST" action="/faq/{{ $faq->id }}">
        @csrf
        @method('PUT')

        <label for="question">Question</label><br>
        <input @error('question') is-danger @enderror
            type="text"
               id="question"
               name="question"
               value="{{ $faq->question }}"><br><br>
        @error('question')
        <p class="help is-danger">{{ $errors->first('question') }}</p>
        @enderror

        <label for="answer">Answer:</label><br>
        <input @error('answer') is-danger @enderror
            type="text"
               id="answer"
               name="answer"
               value="{{ $faq->answer }}"><br><br>
        @error('answer')
        <p class="help is-danger">{{ $errors->first('answer') }}</p>
        @enderror
        <input type="submit" value="Submit">
    </form>
    <form method="POST" action="/faq/{{ $faq->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

@endsection
