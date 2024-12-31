@extends('app')
@section('bikepaths.index')
    @include('message.list')
    新增自行車道表單
    {!! Form::model($bikepath, ['method'=>'PATCH','action'=>['\App\Http\Controllers\BikePathController@update',$bikepath->id]]) !!}
        @include('bikepaths.form',['submit_text' => '編輯自行車道'])
    {!! Form::close() !!}
@endsection