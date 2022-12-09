@extends("app")
@section("tittle")
    Öğrenciler
@endsection

@section("content")
    <ul>
        @foreach($students as $student)
            <li>
                {{$student}}
            </li>
        @endforeach
    </ul>
    <ul>
        @foreach($class as $c)
            <li>
                {{ $c }}
            </li>
        @endforeach
    </ul>
@endsection
