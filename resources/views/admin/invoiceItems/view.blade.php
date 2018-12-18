@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="connection-view">
      <div class="row">
        <div class="col-lg-5">
          <h3>Invoice Specification</h3>
          <table id="w0" class="table table-striped table-bordered detail-view"><tbody><tr><th>ID</th><td>2</td></tr>
            <tr><th>ID</th><td>{{$invoice->id}}</td></tr>
            <tr><th>user</th><td>{{$invoice->user->name}}</td></tr>
            <tr><th>user email</th><td>{{$invoice->user->email}}</td></tr>
            <tr><th>user phone</th><td>{{$invoice->user->mobile}}</td></tr>
            <tr><th>subtotal payment</th><td>{{$invoice->sub_total_payment}}</td></tr>
            <tr><th>tax payment</th><td>{{$invoice->tax_payment}}</td></tr>
            <tr><th>total fee</th><td>{{$invoice->fee}}</td></tr>
            <tr><th>total payment</th><td>{{$invoice->total_payment}}</td></tr>
            <tr><th>status</th><td>{{$invoice->status}}</td></tr>
            </tbody>
          </table>
        </div>
        <div class="col-lg-5">
          <h3>Invoice Items</h3>
          <table class="table table-hover">
            <thead>
            <tr>
              <td>#</td>
              <td>Product Name</td>
              <td>Quantity</td>
              <td>Unit Price</td>
            </tr>
            </thead>
            <tbody>
            @foreach($invoice->items as $invoiceItem)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $invoiceItem->product->name }}</td>
                <td>{{ $invoiceItem->quantity }}</td>
                <td>{{ $invoiceItem->price }}</td>
                <td>
                  {!! Form::model($invoiceItem, ['route' => ['admin.invoiceItems.destroy', $invoiceItem], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                  {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger js-submit-confirm']) !!}
                  {!! Form::close()!!}
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          <a href="{{ route('admin.invoices.create', $invoice->id)}}" class="btn btn-xs btn-success" style="margin-right: 2%;">Add Item</a>

        </div>

      </div>

    </div>
  </div>
@endsection
