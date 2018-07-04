@extends('layouts.app')

@section('content')

    <h1>テスト一覧</h1>

    @if (count($tests) > 0)
        <ul>
            @foreach ($tests as $test)
                <li>{!! link_to_route('tests.show', $test->id, ['id' => $test->id]) !!} : {{ $test->content }}</li>
            @endforeach
        </ul>
    @endif

    {!! link_to_route('tests.create', '新規テストの投稿') !!}

@endsection