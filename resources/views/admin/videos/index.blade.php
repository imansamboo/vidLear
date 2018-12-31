@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Product <small><a href="{{ route('admin.videos.create') }}" class="btn btn-warning btn-sm">New Product</a></small></h3>
        {!! Form::open(['url' => 'admin/videos', 'method'=>'get', 'class'=>'form-inline']) !!}
            <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
              {!! Form::text('q', isset($q) ? $q : null, ['class'=>'form-control', 'placeholder' => 'Type name ...']) !!}
              {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
            </div>

          {!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        <table class="table table-hover">
          <thead>
            <tr>
              <td>title</td>
              <td>duration</td>
              <td>product</td>
              <td>video Source</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
            @foreach($videos as $video)
            <tr>
              <td>{{ $video->title }}</td>
              <td>{{ $video->duration}}</td>
              <td>
                  <span class="label label-primary">
                  <i class="fa fa-btn fa-tags"></i>
                  {{ $video->product->name }}</span>
              </td>
              <td>{{'public/videos/'}}{{ $video->video}}</td>
              <td>
                {!! Form::model($video, ['route' => ['admin.videos.destroy', $video], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                  {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger js-submit-confirm']) !!}
                {!! Form::close()!!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $videos->appends(compact('q'))->links() !!}
      </div>
    </div>
  </div>
@endsection
