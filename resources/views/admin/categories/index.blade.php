@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Category <small><a href="{{ route('admin.categories.create') }}" class="btn btn-warning btn-sm">New Category</a></small></h3>
        {!! Form::open(['url' => 'admin/categories', 'method'=>'get', 'class'=>'form-inline']) !!}
        <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
          {!! Form::text('q', isset($q) ? $q : null, ['class'=>'form-control', 'placeholder' => 'Type category..']) !!}
          {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
        </div>
        {!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        <table class="table table-hover">
          <thead>
          <tr>
            <td> عنوان دسته بندی</td>
            <td>توضیحاتی درباره دسته بندی</td>
          </tr>
          </thead>
          <tbody>
          @foreach($categories as $category)
            <tr>
              <td>{{ $category->title }}</td>
              <td>{{ $category->description}}</td>
              <td>
                {!! Form::model($category, ['route' => ['admin.categories.destroy', $category], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                <a href="{{ route('admin.categories.edit', $category->id)}}" class="btn btn-xs btn-success" style="margin-right: 2%;">Edit</a>
                {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger js-submit-confirm']) !!}
                {!! Form::close()!!}
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        {{ $categories->appends(compact('q'))->links() }}
      </div>
    </div>
  </div>
@endsection
