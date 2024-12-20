@extends('app')
@section('Alts.index')
<h1>新增表單</h1>
{!! Form::open(['url' => 'players/store'])!!}
    <div class="from-group">
        {!! Form::label('project_name','計畫/案件名稱:')!!}
        {!! Form::text('project_name',null, ['class' => 'form-control'])!!}
    </div>