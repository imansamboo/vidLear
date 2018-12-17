@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Invoice <small><a href="{{ route('admin.invoices.create') }}" class="btn btn-warning btn-sm">New Invoice</a></small></h3>
        {!! Form::open(['url' => 'admin/invoices', 'method'=>'get', 'class'=>'form-inline']) !!}
            <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
              {!! Form::text('q', isset($q) ? $q : null, ['class'=>'form-control', 'placeholder' => 'Type name ...']) !!}
              {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
            </div>

          {!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        <table class="table table-hover">
          <thead>
            <tr>
              <td>ID</td>
              <td>User</td>
              <td>Address</td>
              <td>status</td>
              <td>sub-total_payment</td>
              <td>tax_payment</td>
              <td>total_payment</td>
            </tr>
          </thead>
          <tbody>
            @foreach($invoices as $invoice)
            <tr>
              <td>{{ $invoice->id }}</td>
              <td>{{ $invoice->user() }}</td>
              <td>{{ $invoice->address() }}</td>
              <td>{{ $invoice->status }}</td>
              <td>{{ $invoice->sub_total_payment }}</td>
              <td>{{ $invoice->tax_payment }}</td>
              <td>{{ $invoice->total_payment }}</td>

              <td>
                {!! Form::model($invoice, ['route' => ['admin.invoices.destroy', $invoice], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                 <a href="{{ route('admin.invoices.edit', $invoice->id)}}" class="btn btn-xs btn-success" style="margin-right: 2%;">Edit</a>
                  {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger js-submit-confirm']) !!}
                {!! Form::close()!!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $invoices->appends(compact('q'))->links() !!}
      </div>
    </div>
  </div>
@endsection
