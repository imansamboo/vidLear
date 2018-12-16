<div class="form-group {!! $errors->has('destination') ? 'has-error' : '' !!}">
  {!! Form::label('destination', 'Destination') !!}
    {!! Form::select('destination', [''=>'']+App\Province::pluck('name','id')->all(), null, ['class'=>'form-control js-selectize']) !!}
  {!! $errors->first('destination', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('cost') ? 'has-error' : '' !!}">
    {!! Form::label('cost', 'Cost') !!}
    {!! Form::text('cost', null, ['class'=>'form-control']) !!}
    {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
</div>
{!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
