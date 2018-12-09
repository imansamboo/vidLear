@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>New Province</h3>
        {!! Form::open(['route' => 'admin.cities.store'])!!}
          @include('admin.cities._form')
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
