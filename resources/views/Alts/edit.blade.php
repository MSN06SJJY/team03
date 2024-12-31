@extends('app')
@section('Alts.index')
<h1>修改表單</h1>
{!! Form::open(['url' => 'At/store']) !!}
    <div class="from-group">
        {!! Form::label('bikeway_name','自行車道名稱:') !!}
        {!! Form::text('bikeway_name',$Alt->bikeway_name, ['class' => 'form-control']) !!}
    </div>
    <div class="from-group">
        {!! Form::label('districts','行政區:') !!}
        {!! Form::text('districts',$Alt->districts, ['class' => 'form-control']) !!}
    </div>
    <div class="from-group">
        {!! Form::label('length','長度:') !!}
        {!! Form::text('length',$Alt->length, ['class' => 'form-control']) !!}
    </div>
    <div class="from-group">
        {!! Form::label('surrounding_attractions','周邊景點:') !!}
        {!! Form::text('surrounding_attractions',$Alt->surrounding_attractions, ['class' => 'form-control']) !!}
    </div>
    <div class="from-group">
        {!! Form::submit("修改自行車道", ['class' => 'btn btn-primary form-control']) !!}
    </div>
{!! Form::close() !!}