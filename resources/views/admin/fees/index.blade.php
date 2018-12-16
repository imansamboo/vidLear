@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>fee <small><a href="{{ route('admin.fees.create') }}" class="btn btn-warning btn-sm">New fee</a></small></h3>
        {!! Form::open(['url' => 'admin/fees', 'method'=>'get', 'class'=>'form-inline']) !!}
            <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
              {!! Form::text('q', isset($q) ? $q : null, ['class'=>'form-control', 'placeholder' => 'Type name ...']) !!}
              {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
            </div>

          {!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        <table class="table table-hover">
          <thead>
            <tr>
              <td>Origin</td>
              <td>Destination</td>
              <td>Cost</td>
            </tr>
          </thead>
          <tbody>
            @foreach($fees as $fee)
            <tr>
              <td>تهران</td>
              <td>{{ $fee->province($fee->destination)->name }}</td>
              <td>{{ $fee->cost}}</td>
              <td>
                {!! Form::model($fee, ['route' => ['admin.fees.destroy', $fee], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                 <a href="{{ route('admin.fees.edit', $fee->id)}}" class="btn btn-xs btn-success" style="margin-right: 2%;">Edit</a>
                  {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger js-submit-confirm']) !!}
                {!! Form::close()!!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $fees->appends(compact('q'))->links() !!}
      </div>
    </div>
  </div>
@endsection
