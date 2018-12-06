@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>City <small><a href="{{ route('cities.create') }}" class="btn btn-warning btn-sm">New City</a></small></h3>
        {!! Form::open(['url' => 'cities', 'method'=>'get', 'class'=>'form-inline']) !!}
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
              <td>Province</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
            @foreach($cities as $city)
            <tr>
              <td>{{ $city->name }}</td>
              <td>
                {{ $city->province->name }}
              </td>
              <td>
                {!! Form::model($city, ['route' => ['cities.destroy', $city], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                 <a href="{{ route('cities.edit', $city->id)}}" class="btn btn-xs btn-success" style="margin-right: 2%;">Edit</a>
                  {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger js-submit-confirm']) !!}
                {!! Form::close()!!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $cities->appends(compact('q'))->links() !!}
      </div>
    </div>
  </div>
@endsection
