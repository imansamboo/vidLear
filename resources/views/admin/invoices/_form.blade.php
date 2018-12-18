{{--<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
  {!! Form::label('name', 'Name') !!}
  {!! Form::text('name', null, ['class'=>'form-control']) !!}
  {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>--}}

<div class="form-group {!! $errors->has('user') ? 'has-error' : '' !!}">
    {!! Form::label('user', 'User') !!}
    {{-- Simplify things, no need to implement ajax for now --}}
    {!! Form::select('user_id', [''=>'']+App\User::pluck('name','id')->all(), null, ['class'=>'form-control js-selectize']) !!}

    {!! $errors->first('user', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('product') ? 'has-error' : '' !!}">
    {!! Form::label('product', 'Product') !!}
    {{-- Simplify things, no need to implement ajax for now --}}
    {!! Form::select('product_id', [''=>'']+App\Product::pluck('name','id')->all(), null, ['class'=>'form-control js-selectize']) !!}

    {!! $errors->first('product', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('quantity') ? 'has-error' : '' !!}">
    {!! Form::label('quantity', 'Quantity') !!}
    {{-- Simplify things, no need to implement ajax for now --}}
    {!! Form::number('quantity') !!}

    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('address') ? 'has-error' : '' !!}">
    {!! Form::label('address', 'Address') !!}
    {{-- Simplify things, no need to implement ajax for now --}}
    {!! Form::select('address_id', [''=>'']+App\Address::pluck('name','id')->all(), null, ['class'=>'form-control js-selectize']) !!}

    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('status') ? 'has-error' : '' !!}">
    {!! Form::label('status', 'Status') !!}
    {{-- Simplify things, no need to implement ajax for now --}}
    {!! Form::select('status', array('paid' => 'paid', 'unpaid' => 'unpaid'), 'unpaid', ['class'=>'form-control js-selectize']) !!}

    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('taxed') ? 'has-error' : '' !!}">
    {!! Form::label('taxed', 'Taxed') !!}
    {{-- Simplify things, no need to implement ajax for now --}}
    {!! Form::checkbox('taxed', 1, false) !!}

    {!! $errors->first('taxed', '<p class="help-block">:message</p>') !!}
</div>

{!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
