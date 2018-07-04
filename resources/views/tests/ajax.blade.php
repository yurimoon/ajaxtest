@extends('layouts.app')

@section('content')

    <h1>Ajaxによるテスト新規作成ページ</h1>

    {!! Form::model($test) !!}

        {!! Form::label('content', 'テスト:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿', ['id' => 'sendButton']) !!}

    {!! Form::close() !!}

<script src="{{ asset('/js/jquery-3.3.1.js') }}"></script>
<script>
$("#sendButton").click(function(e){
  e.preventDefault();
  $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type : "POST",
    url : './doSomething',
    data: {
        content : $("#content").val()
    },
    dataType : "json",
  });
});


</script>

@endsection