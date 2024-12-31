<div class="form-group">
    {!! Form::label('bike_path_name', '自行車道名稱:') !!}
    {!! Form::text('bike_path_name' , null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('district', '行政區:')!!}
    {!! Form::text('district' , null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('length', '自行車道長度(公里):')!!}
    {!! Form::text('length' , null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nearby_attractions', '周邊景點:')!!}
    {!! Form::text('nearby_attractions' , null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <br/>
    {!! Form::submit($submit_text , ['class'=>'btn btn-primary form-control']) !!}
</div>