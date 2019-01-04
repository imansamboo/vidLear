@include('layouts.iHeader')


<!------ Products ---------->

<!------ Products ---------->
<div class="container product">
    @foreach($productContainer as $productArray)
        <div class="row">
            <div class="col-md-12">
                {{--<p class="new-product"><i class="fa fa-bars" aria-hidden="true"></i>
                    محصولات</p>--}}
            @foreach($productArray as $product)
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="col-item">
                            <div class="photo">
                                <a href="{{url('/products')}}/{{$product->id}}"><img src="{{asset('img2/'. (fmod($loop->index, 8) + 1) . '.jpg')}}" class="img-responsive" alt="a"/></a>
                            </div>
                            <div class="info">
                                <div class="row">
                                    <div class="price col-md-12">
                                        <a class="product-fsize" href="{{url('/products')}}/{{$product->id}}">{{$product->name}}</a>
                                    </div>
                                    <div class="rating col-md-6">
                                        <p class="product-tsize new-product">مهران عباسی</p>
                                    </div>
                                    <div class="rating col-md-6">
                                        <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                        </i><i class="gold-star fa fa-star"></i><i class="fa fa-star">
                                        </i><i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p class="product-off left-float"> تومان  {{$product->price}}</p>
                                <div class="clear-left">
                                    <p class="right-float">
                                        <img src="{{asset('img2/clock-outline.png')}}">07:48:29</p>
                                    <p class="left-float product-price">
                                       تومان  {{0.9*$product->price}}</p>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    @endforeach
</div>
@include('layouts.vFooter')
