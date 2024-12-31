@extends('app')
@section('bikepaths.index')
    @include('message.list')
    新增自行車道表單
    {!! Form::open(['url' => 'bikepaths/store']) !!}
        @include('bikepaths.form',['submit_text' => '新增自行車道'])
    {!! Form::close() !!}
@endsection