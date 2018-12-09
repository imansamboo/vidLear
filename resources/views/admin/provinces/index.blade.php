@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Province <small><a href="{{ route('admin.provinces.create') }}" class="btn btn-warning btn-sm">New Province</a></small></h3>
        {!! Form::open(['url' => 'admin.provinces', 'method'=>'get', 'class'=>'form-inline']) !!}
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
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
            @foreach($provinces as $province)
            <tr>
              <td>{{ $province->name }}</td>
              <td>
                {!! Form::model($province, ['route' => ['admin.provinces.destroy', $province], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                 <a href="{{ route('admin.provinces.edit', $province->id)}}" class="btn btn-xs btn-success" style="margin-right: 2%;">Edit</a>
                  {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger js-submit-confirm']) !!}
                {!! Form::close()!!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $provinces->appends(compact('q'))->links() !!}
      </div>
    </div>
  </div>
@endsection
