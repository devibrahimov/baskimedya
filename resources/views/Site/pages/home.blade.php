@extends('Site.index')


@section('content')

    <!-- START SECTION BANNER -->
    <div class="banner_section full_screen staggered-animation-wrap">
        <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow carousel_style2" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active background_bg overlay_bg_50" data-img-src="assets/images/banner10.jpg">
                    <div class="banner_slide_content banner_content_inner">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-10">
                                    <div class="banner_content text_white text-center">
{{--                                        <h5 class="mb-3 bg_strip staggered-animation text-uppercase" data-animation="fadeInDown" data-animation-delay="0.2s">Starting $90.00</h5>--}}
                                        <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">Uygun Baskının Dijital Merkezi</h2>
                                        <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">Reklamcılık alanında üretimden montaja 7 seneyi aşkın tecrübemiz ve yenilikçi fikirlerimiz ile firmaların gelişen rekabet ortamına uyum sağlayabilmeleri için çalışıyoruz.</p>
                                        <a class="btn btn-white staggered-animation" href="shop-left-sidebar.html" data-animation="fadeInUp" data-animation-delay="0.5s">Ürünü İncele</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item background_bg overlay_bg_50" data-img-src="assets/images/banner10.jpg">
                    <div class="banner_slide_content banner_content_inner">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-10">
                                    <div class="banner_content text_white text-center">
                                        <h5 class="mb-3 staggered-animation font-weight-light" data-animation="fadeInDown" data-animation-delay="0.2s">Get up to 50% off Today Only!</h5>
                                        <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">Quality Furniture</h2>
                                        <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        <a class="btn btn-white staggered-animation" href="shop-left-sidebar.html" data-animation="fadeInUp" data-animation-delay="0.4s">Ürünü İncele</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item background_bg overlay_bg_60" data-img-src="assets/images/banner10.jpg">
                    <div class="banner_slide_content banner_content_inner">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-10">
                                    <div class="banner_content text_white text-center">
                                        <h5 class="mb-3 staggered-animation font-weight-light" data-animation="fadeInDown" data-animation-delay="0.2s">Taking your Viewing Experience to Next Level</h5>
                                        <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">Living Room Collection</h2>
                                        <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        <a class="btn btn-white staggered-animation" href="shop-left-sidebar.html" data-animation="fadeInUp" data-animation-delay="0.4s">Ürünü İncele</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
        </div>
    </div>
    <!-- END SECTION BANNER -->

        <!-- STAT SECTION ABOUT -->
        <div class="section">
            <div class="container">
                <div class="row align-items-center">
               @if($about != NULL)
                    <div class="col-lg-6">

                        <div class="about_img scene mb-4 mb-lg-0"style="height:400px;  background: url('/uploads/setting/{{$about->image}}') no-repeat;
                            background-size: cover;background-position: center center !important;">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="heading_s1">
                            <h2>@if(isset($about)){!!$about->header!!}@endif</h2>
                        </div>@if(isset($about)){!!$about->content!!}@endif</div>
                     </div>
                @endif

                </div>
            </div>
        </div>
        <!-- END SECTION ABOUT -->

        <!-- START SECTION SHOP -->
        <div class="section small_pt pb_70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s4 text-center">
                            <h2><a href="{{route('site.product')}}">Ürünlerimiz</a></h2>
                        </div>
                        <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius.</p>
                    </div>
                </div>
                <div class="row shop_container">
                    @foreach($products as $product)
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="product_box text-center">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="/storage/uploads/thumbnail/products/small/{{$product->image}}" height="280.55px" alt="{{$product->name}}" title="{{$product->name}}">
                                </a>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="{{route('showProducts',[$product->id,$product->slug])}}">{{$product->name}}</a></h6>
                                <div class="product_price">
                                    <span class="price">${{$product->price}}</span>

                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:100%"></div>
                                    </div>
                                </div>
                                <div class="pr_desc">
                                    <p> {{$product->description}}</p>
                                </div>
                                <div class="add-to-cart">
                                    <a href="{{route('showProducts',[$product->id,$product->slug])}}" class="btn btn-fill-out btn-radius"><i class="icon-basket"></i> Sipariş ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION CLIENT LOGO -->
        <div class="section small_pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading_tab_header">
                            <div class="heading_s2">
                                <h2>Referanslarımız</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="client_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false" data-nav="true" data-margin="30" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}}'>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="assets/images/cl_logo1.png" alt="cl_logo"/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="assets/images/cl_logo2.png" alt="cl_logo"/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="assets/images/cl_logo3.png" alt="cl_logo"/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="assets/images/cl_logo4.png" alt="cl_logo"/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="assets/images/cl_logo5.png" alt="cl_logo"/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="assets/images/cl_logo6.png" alt="cl_logo"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION CLIENT LOGO -->

    </div>
    <!-- END MAIN CONTENT -->



@endsection



@section('css')

@endsection




@section('js')

@endsection
