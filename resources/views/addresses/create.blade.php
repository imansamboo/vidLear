@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>New Address</h3>
        {!! Form::open(['route' => 'addresses.store'])!!}
          @include('addresses._form')
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
