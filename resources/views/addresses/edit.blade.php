@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Edit {{ $address->name }}</h3>
        {!! Form::model($address, ['route' => ['addresses.update', $address], 'method' =>'patch', 'files' => true])!!}
          @include('addresses._form', ['model' => $address])
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
