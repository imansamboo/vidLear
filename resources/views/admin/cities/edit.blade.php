@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Edit {{ $cities->name }}</h3>
        {!! Form::model($cities, ['route' => ['admin.citiess.update', $cities], 'method' =>'patch', 'files' => true])!!}
          @include('admin.citiess._form', ['model' => $cities])
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
