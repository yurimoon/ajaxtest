@extends('layouts.app')

@section('content')

    <h1>id: {{ $test->id }} のテスト編集ページ</h1>

    {!! Form::model($test, ['route' => ['tests.update', $test->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'テスト:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection