@extends('app')
@section('Alts.index')
<h1>修改表單</h1>


{!! Form::model($Alt, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\AtlController@update' , $Alt->id]]) !!}
    @include('Alts.form', ['submitButtonText'=>"修改"])
{!! Form::close() !!}
