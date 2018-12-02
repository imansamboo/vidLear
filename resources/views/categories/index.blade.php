@extends('layouts.app')
@section('content')
{{--
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="container" style="width: 1000px" xmlns="">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-8"><h2> <b>دسته بندی ها</b></h2></div>
            <div class="col-sm-4" style="padding-top: 0px;padding-left: 91%;">
              <a href="{{url('/categories/create')}}"><button type="button" class="btn btn-info"><i></i> دسته بندی جدید</button></a>
            </div>
          </div>
        </div>
        <table class="table">
          <thead>
          <tr>
            <th>#</th>
            <th>عنوان دسته بندی</th>
            <th>توضیحاتی پیرامون دسته بندی</th>
          </tr>
          </thead>
          <tbody>
          @foreach($categories as $category)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $category->title }}</td>
            <td>{{ $category->description }}</td>
            <td>
              <a href="{{url('/categories/create')}}" class="add" title="" data-toggle="tooltip" data-original-title="Add"><span class="glyphicon glyphicon-eye-open" style="color:greenyellow"></span></a>
              <a href="{{url('/categories/edit')}}/{{$category->id}}" class="edit" title="" data-toggle="tooltip" data-original-title="Edit"><span class="glyphicon glyphicon-pencil" style="color: darkorange"></span></a>
              <a href="{{url('/categories/destroy')}}/{{$category->id}}" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><span class="glyphicon glyphicon-trash" style="color: red"></span></a>
            </td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
{{ $categories->appends(compact('q'))->links() }}

--}}




      </div>
    </div>
</div>
@endsection
