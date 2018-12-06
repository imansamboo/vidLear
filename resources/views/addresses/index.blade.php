@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>address <small><a href="{{ route('addresses.create') }}" class="btn btn-warning btn-sm">New address</a></small></h3>
        {!! Form::open(['url' => 'addresses', 'method'=>'get', 'class'=>'form-inline']) !!}
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
              <td>City</td>
              <td>Detail</td>
              <td>User</td>
            </tr>
          </thead>
          <tbody>
            @foreach($addresses as $address)
            <tr>
              <td>{{ $address->name }}</td>
              <td>{{ $address->city->province->name }}</td>
              <td>{{ $address->city->name}}</td>
              <td>{{ $address->detail}}</td>
              <td>{{ $address->user->name }}</td>

              <td>
                {!! Form::model($address, ['route' => ['addresses.destroy', $address], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                 <a href="{{ route('addresses.edit', $address->id)}}" class="btn btn-xs btn-success" style="margin-right: 2%;">Edit</a>
                  {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger js-submit-confirm']) !!}
                {!! Form::close()!!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $addresses->appends(compact('q'))->links() !!}
      </div>
    </div>
  </div>
@endsection
