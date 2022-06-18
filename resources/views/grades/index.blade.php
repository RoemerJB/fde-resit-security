@extends('layout')

@section('content')




    <table>
        <tr><th>Study monitor</th></tr>
        <tr>
            <th>Course name</th>
            <th>EC</th>
            <th>Test name</th>
            <th>Lowest passing grade</th>
            <th>Best grade</th>
            <th><form method="get" action="/grades/create">
                <button type="submit">Add grade</button>
                </form></th>
        </tr>

        @foreach($grades as $grade)
            <h3><a href="{{ $grade->path() }}"></a></h3>
            <tr>
                <td>{{ $grade->course_name }}</td>
                <td>{{ $grade->EC }}</td>
                <td>{{ $grade->test_name }}</td>
                <td>{{ $grade->lowest_passing_grade }}</td>
                <td>{{ $grade->best_grade }}</td>
                <td><form method="get" action="/grades/{{ $grade->id }}/edit">
                        <button type="submit">Edit</button>
                    </form></td>
                <td><form method="POST" action="/grades/{{ $grade->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form></td>
            </tr>
    @endforeach
    </table>

@endsection
