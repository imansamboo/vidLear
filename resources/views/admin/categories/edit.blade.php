@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10">
      <h3>Edit {{ $category->title }}</h3>
      {!! Form::model($category, ['route' => ['admin.categories.update', $category],'method' =>'patch', 'files' => true])!!}
      @include('admin.categories._form', ['model' => $category])
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
