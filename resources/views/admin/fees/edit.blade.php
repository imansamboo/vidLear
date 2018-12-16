@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Edit {{ $fee->name }}</h3>
        {!! Form::model($fee, ['route' => ['admin.fees.update', $fee], 'method' =>'patch', 'files' => true])!!}
          @include('admin.fees._form', ['model' => $fee])
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
