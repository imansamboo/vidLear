@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Edit {{ $invoiceItem->name }}</h3>
        {!! Form::model($invoiceItem, ['route' => ['admin.invoiceItems.update', $invoiceItem], 'method' =>'patch', 'files' => true])!!}
          @include('admin.invoices._form', ['model' => $invoiceItem, 'id' => $])
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
