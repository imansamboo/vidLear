@include('layouts.iHeader')



<!------ Products ---------->
<div class="container product">
    <div class="row">
        <div class="col-md-12">
            <p class="new-product"><i class="fa fa-bars" aria-hidden="true"></i>
                دسته بندی ها</p>

        </div>
        @foreach($categories as $category)
        <div class="col-md-3">
            <div class="product-item">
                <div class="col-item">
                    <div class="photo">
                        <a class="product-fsize" href="{{url('/categories')}}/{{$category->id}}/products">
                            <img src="{{asset('img2/'. (fmod($loop->index, 8) + 1) . '.jpg')}}" class="img-responsive" alt="a"/>
                        </a>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <a class="product-fsize" href="{{url('/categories')}}/{{$category->id}}/products">{{$category->title}}</a>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    {!! $categories->appends(compact('q'))->links() !!}
</div>

@include('layouts.vFooter')
