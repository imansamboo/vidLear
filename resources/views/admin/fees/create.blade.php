@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>New Address</h3>
        {!! Form::open(['route' => 'admin.fees.store'])!!}
          @include('admin.fees._form')
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
