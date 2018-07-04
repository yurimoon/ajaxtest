@extends('layouts.app')

@section('content')

    <h1>id = {{ $test->id }} のテスト詳細ページ</h1>

    <p>{{ $test->content }}</p>

    {!! link_to_route('tests.edit', 'このテストを編集', ['id' => $test->id]) !!}

    {!! Form::model($test, ['route' => ['tests.destroy', $test->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
@endsection