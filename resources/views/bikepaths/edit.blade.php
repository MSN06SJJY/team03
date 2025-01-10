@extends('app')
@section('bikepaths.index')
    @include('message.list')
    <h1>新增自行車道表單</h1>
    {!! Form::model($bikepath, ['method'=>'PATCH','action'=>['\App\Http\Controllers\BikePathController@update',$bikepath->id]]) !!}
        @include('bikepaths.form',['submit_text' => '編輯自行車道'])
        <a href="/bikepaths" class="color-button-cancel">取消</a>
    {!! Form::close() !!}
@endsection