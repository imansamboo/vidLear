@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>New Province</h3>
        {!! Form::open(['route' => 'provinces.store'])!!}
          @include('provinces._form')
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
