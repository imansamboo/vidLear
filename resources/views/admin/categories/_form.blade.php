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
<div class="form-group {!! $errors->has('photo') ? 'has-error' : '' !!}">
    {!! Form::label('photo', 'Category photo (jpeg, png)') !!}
    {!! Form::file('photo') !!}
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}

    @if (isset($model) && $model->photo !== '')
        <div class="row">
            <div class="col-md-6">
                <p>Current photo:</p>
                <div class="thumbnail">
                    <img src="{{ url('/img/' . $model->photo) }}" class="img-rounded">
                </div>
            </div>
        </div>
@endif
  {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
