<div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
  {!! Form::label('title', 'Title') !!}
  {!! Form::text('title', null, ['class'=>'form-control']) !!}
  {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('duration') ? 'has-error' : '' !!}">
  {!! Form::label('duration', 'Duration') !!}
  {!! Form::text('duration', null, ['class'=>'form-control']) !!}
  {!! $errors->first('duration', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('category_lists') ? 'has-error' : '' !!}">
  {!! Form::label('product_id', 'Categories') !!}
   Simplify things, no need to implement ajax for now
  {!! Form::select('product_id', [''=>'']+App\Product::pluck('name','id')->all(), null, ['class'=>'form-control js-selectize', ]) !!}

  {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('video') ? 'has-error' : '' !!}">
  {!! Form::label('video', 'Product video (mp4)') !!}
  {!! Form::file('video') !!}
  {!! $errors->first('video', '<p class="help-block">:message</p>') !!}

  {{--@if (isset($model) && $model->video !== '')
  <div class="row">
    <div class="col-md-6">
      <p>Current video:</p>
      <div class="thumbnail">
        <img src="{{ url('/img/' . $model->video) }}" class="img-rounded">
      </div>
    </div>
  </div>
  @endif--}}
</div>

{!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
