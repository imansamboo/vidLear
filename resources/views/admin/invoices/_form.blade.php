<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
  {!! Form::label('name', 'Name') !!}
  {!! Form::text('name', null, ['class'=>'form-control']) !!}
  {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('province_lists') ? 'has-error' : '' !!}">
    {!! Form::label('province_lists', 'Categories') !!}
    {{-- Simplify things, no need to implement ajax for now --}}
    {!! Form::select('province_id', [''=>'']+App\Province::pluck('name','id')->all(), null, ['class'=>'form-control js-selectize', 'multiple']) !!}

    {!! $errors->first('province_lists', '<p class="help-block">:message</p>') !!}
</div>

{!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
