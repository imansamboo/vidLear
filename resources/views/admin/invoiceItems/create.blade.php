@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>New Province</h3>
        {!! Form::open(['route' => 'admin.invoiceItems.store'])!!}
          @include('admin.invoiceItems._form', ['invoice_id' => $invoice_id])
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
