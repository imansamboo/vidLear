@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Edit {{ $province->title }}</h3>
        {!! Form::model($province, ['route' => ['provinces.update', $province], 'method' =>'patch', 'files' => true])!!}
          @include('provinces._form', ['model' => $province])
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
