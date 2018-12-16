@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Product <small><a href="{{ route('admin.products.create') }}" class="btn btn-warning btn-sm">New Product</a></small></h3>
        {!! Form::open(['url' => 'admin/products', 'method'=>'get', 'class'=>'form-inline']) !!}
            <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
              {!! Form::text('q', isset($q) ? $q : null, ['class'=>'form-control', 'placeholder' => 'Type name ...']) !!}
              {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
            </div>

          {!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        <table class="table table-hover">
          <thead>
            <tr>
              <td>Name</td>
              <td>description</td>
              <td>Category</td>
              <td>Price</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>
              <td>{{ $product->name }}</td>
              <td>{{ $product->description}}</td>
              <td>
                @foreach ($product->categories as $category)
                  <span class="label label-primary">
                  <i class="fa fa-btn fa-tags"></i>
                  {{ $category->title }}</span>
                @endforeach
              </td>
              <td>{{ $product->price}}</td>
              <td>
                {!! Form::model($product, ['route' => ['admin.products.destroy', $product], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                 <a href="{{ route('admin.products.edit', $product->id)}}" class="btn btn-xs btn-success" style="margin-right: 2%;">Edit</a>
                  {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger js-submit-confirm']) !!}
                {!! Form::close()!!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $products->appends(compact('q'))->links() !!}
      </div>
    </div>
  </div>
@endsection
