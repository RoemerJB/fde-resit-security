@extends('layout')

@section('content')

    <h2>Enter grade</h2>

    <form method="POST" action="/grades">
        @csrf

        <label for="course_name">Course name</label><br>
        <input
            @error('course_name') is-danger @enderror
        type="text"
            id="course_name"
            name="course_name"><br><br>
        @error('course_name')
        <p class="help is-danger">{{ $errors->first('course_name') }}</p>
        @enderror

        <label for="test_name">Test name</label><br>
        <input
            @error('test_name') is-danger @enderror
        type="text"
            id="test_name"
            name="test_name"><br><br>
        @error('test_name')
        <p class="help is-danger">{{ $errors->first('test_name') }}</p>
        @enderror

        <label for="best_grade">Best grade</label><br>
        <input
            @error('best_grade') is-danger @enderror
        type="number"
            id="best_grade"
            name="best_grade"><br><br>
        @error('best_grade')
        <p class="help is-danger">{{ $errors->first('best_grade') }}</p>
        @enderror
        <input type="submit" value="Submit">
    </form>
{{--    <form method="POST" action="/grades">--}}
{{--        @csrf--}}
{{--        <button type="submit">Cancel</button>--}}
{{--    </form>--}}

@endsection
