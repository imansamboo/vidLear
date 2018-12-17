@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>New Province</h3>
        {!! Form::open(['route' => 'admin.invoices.store'])!!}
          @include('admin.invoices._form')
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
