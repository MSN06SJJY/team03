{!! Form::open(['url' => 'At/store']) !!}
    <div class="from-group">
        {!! Form::label('bikeway_name','自行車道名稱:') !!}
        {!! Form::text('bikeway_name',null, ['class' => 'form-control']) !!}
    </div>
    <div class="from-group">
        {!! Form::label('districts','行政區:') !!}
        {!! Form::text('districts',null, ['class' => 'form-control']) !!}
    </div>
    <div class="from-group">
        {!! Form::label('length','長度:') !!}
        {!! Form::text('length',null, ['class' => 'form-control']) !!}
    </div>
    <div class="from-group">
        {!! Form::label('surrounding_attractions','周邊景點:') !!}
        {!! Form::text('surrounding_attractions',null, ['class' => 'form-control']) !!}
    </div>
    <div class="from-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
{!! Form::close() !!}