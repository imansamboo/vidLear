@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Edit {{ $invoice->name }}</h3>
        {!! Form::model($invoice, ['route' => ['admin.invoices.update', $invoice], 'method' =>'patch', 'files' => true])!!}
          @include('admin.invoices._form', ['model' => $invoice])
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
