@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>دسته بندی جدید</h3>
        {!! Form::open(['route' => 'categories.store'])!!}
        @include('categories._form')
        {!! Form::close() !!}

    {{--{{ Form::open(array('url' => 'categories/store' ,  'method' => 'post'))}}
            <div class="row" style="padding: 1%">
                <div class="col-lg-6">
                    <div class="input-group">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> نام دسته بندی</button>
                    </span>
                    <input id="title" required name="title" type="text" class="form-control" placeholder="نام دسته بندی را وارد کنید">
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->


            </div><!-- /.row -->
            <div class="row" style="padding: 1%">
                <div class="col-lg-6">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">توضیحات دسته بندی</button>
                        </span>
                        <input id="description" required name="description" type= "text" class="form-control" placeholder="توضیحات دسته بندی را وارد کنید">
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row" style="padding-top: 2%">
                <div class="col-lg-6">
                    <button class="btn btn-primary right" style="float: right; margin-right: 10%;" id="submit">ذخیره</button>
                </div>
            </div>
    {{ Form::close() }}--}}

    </div>
  </div>
</div>
@endsection
