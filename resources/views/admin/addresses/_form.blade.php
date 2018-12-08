<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
  {!! Form::label('name', 'Name') !!}
  {!! Form::text('name', null, ['class'=>'form-control']) !!}
  {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('detail') ? 'has-error' : '' !!}">
    {!! Form::label('detail', 'Detail') !!}
    {!! Form::text('detail', null, ['class'=>'form-control']) !!}
    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('province_lists') ? 'has-error' : '' !!}">
    {!! Form::label('city_lists', 'City') !!}
    {{-- Simplify things, no need to implement ajax for now --}}
    {!! Form::select('city_id', [''=>'']+App\City::pluck('name','id')->all(), null, ['class'=>'form-control js-selectize']) !!}

    {!! $errors->first('city_lists', '<p class="help-block">:message</p>') !!}
</div>

{!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
