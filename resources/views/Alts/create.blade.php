@extends('app')
@section('Alts.index')
<h1>新增表單</h1>
    
@include('messges.list')
{!! Form::open(['url' => 'At/store']) !!}
    @include('Alts.form', ['submitButtonText'=>"新增自行車道資料"])
{!! Form::close() !!}
