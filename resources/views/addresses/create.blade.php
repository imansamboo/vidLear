@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>New Province</h3>
        {!! Form::open(['route' => 'cities.store'])!!}
          @include('cities._form')
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
