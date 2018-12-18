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

<div class="form-group {!! $errors->has('taxed') ? 'has-error' : '' !!}">
    {!! Form::label('taxed', 'Taxed') !!}
    {{-- Simplify things, no need to implement ajax for now --}}
    {!! Form::checkbox('taxed', 1, false) !!}

    {!! $errors->first('taxed', '<p class="help-block">:message</p>') !!}
</div>
{!! Form::hidden('invoice_id', $invoice_id) !!}


{!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
