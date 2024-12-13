@extends('app')
@section('bikepaths.index')
新增自行車道表單
{!! Form::open(['url' => 'bikepaths/store']) !!}
    <div>
        {!! Form::label('bike_path_name', '自行車道名稱:') !!}
        {!! Form::text('bike_path_name' , null) !!}
    </div>
    <div>
        {!! Form::label('district', '行政區:')!!}
        {!! Form::text('district' , null) !!}
    </div>
    <div>
        {!! Form::label('length', '自行車道長度(公里):')!!}
        {!! Form::text('length' , null) !!}
    </div>
    <div>
        {!! Form::label('nearby_attractions', '周邊景點:')!!}
        {!! Form::text('nearby_attractions' , null) !!}
    </div>
    <div>
        <br/>
        {!! Form::submit('新增自行車資料' , ['class'=>'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}
@endsection