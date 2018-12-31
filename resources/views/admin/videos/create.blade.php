@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>New Product</h3>
        {!! Form::open(['route' => 'admin.products.store', 'files' => true])!!}
          @include('admin.products._form')
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
