@extends('layouts.app')

@section('content')

    <h1>テスト新規作成ページ</h1>

    {!! Form::model($test, ['route' => 'tests.store']) !!}

        {!! Form::label('content', 'テスト:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection