<div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
  {!! Form::label('title', 'Title') !!}
  {!! Form::text('title', null, ['class'=>'form-control']) !!}
  {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
    {!! Form::label('description', 'Description') !!}
    {!! Form::text('description', null, ['class'=>'form-control']) !!}
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
  {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
