@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Edit {{ $product->title }}</h3>
        {!! Form::model($product, ['route' => ['admin.products.update', $product], 'method' =>'patch', 'files' => true])!!}
          @include('admin.products._form', ['model' => $product])
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
