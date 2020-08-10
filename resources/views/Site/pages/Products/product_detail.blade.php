@extends('Site.index')

@section('content')
    @include('Site.partials.bread')

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                        <div class="product-image">
                            <div class="product_img_box">
                                <img id="product_img" src='/storage/uploads/thumbnail/products/large/{{$product->image}}' data-zoom-image="/storage/uploads/thumbnail/products/large/{{$product->image}}" alt="product_img1" />
                                <a href="#" class="product_img_zoom" title="Zoom">
                                    <span class="linearicons-zoom-in"></span>
                                </a>
                            </div>
                            <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                                <div class="item">
                                    <a href="#" class="product_gallery_item active" data-image="/storage/uploads/thumbnail/products/large/{{$product->image}}" data-zoom-image="/storage/uploads/thumbnail/products/large/{{$product->image}}">
                                        <img src="/storage/uploads/thumbnail/products/large/{{$product->image}}" alt="product_small_img1" />
                                    </a>
                                </div>
                                @foreach($images as $img)
                                <div class="item">
                                    <a href="#" class="product_gallery_item " data-image="/storage/uploads/thumbnail/products/large/{{$img->name}}" data-zoom-image="/storage/uploads/thumbnail/products/large/{{$img->name}}">
                                        <img src="/storage/uploads/thumbnail/products/small/{{$img->name}}" alt="product_small_img1" />
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <br>
                       <div class="pr_detail">
                           <div class="product_description">
                               <div class="pr_desc">
                                   <p>{{$product->description}}</p>
                               </div>
                               <br>
                               <ul class="product-meta d-inline">
                                   <li class="text-default">Ürün Adı: <a href="{{route('showProducts',[$product->id,$product->slug])}}"> {{$product->name}}</a></li>
                                   <li class="text-default" >Kategori: <a href="#"> {{ $product->categoryName->name}} </a></li>
                                   <li class="text-default">Ürün kodu: <a href="{{route('showProducts',[$product->id,$product->slug])}}"> {{$product->product_code}}</a></li>

                               </ul>
                               <hr />
                               <div class="product_share">
                               <span>Paylaş:</span>
                               <ul class="social_icons">
                                   <li><a href="#"><i class="ion-social-facebook text-info"> </i> facebook </a></li>
                               </ul>
                           </div>
                           </div>
                       </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="pr_detail">
                            <div class="product_description">
                                <h4 class="product_title"><a href="#">{{$product->name}}</a></h4>
                                <div class="product_price">
                                    <span class="price">${{$product->price}}</span>
                                    <del>$55.25</del>

                                </div>

                                <br> <hr>


                                <p>Seçenekler</p>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text bg_default text-white "  for="inputGroupSelect01">{{$product->optionparentName->name}}</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        @if($product->parent_option != NULL)
                                        @foreach($product->options($product->parent_option) as $option)
                                        <option value="{{$option->id}}">{{$option->name}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <hr>



                                <div id="dimensions" class="card shadow-sm mb-4" >
                                    <div class="card-header bg_default text-white"  >
                                        <h6 class="mb-0 font-weight-bold text-white">Ölçüler</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group mb-0">
                                                    <label for="width" class="sr-only ">En</label>
                                                    <div class="input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg_default text-white font-weight-bold">EN</span>
                                                        </div>
                                                        <input type="number" min="1" step="1" id="width" name="width" value="100" class="form-control">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text bg_default text-white ">sm</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group mb-0">
                                                    <label for="height" class="sr-only">Boy</label>
                                                    <div class="input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text font-weight-bold bg_default text-white ">BOY</span>
                                                        </div>
                                                        <input type="number" min="1" step="1" id="height" name="height" value="100" class="form-control">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text bg_default text-white ">sm</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table table-sm table-hover mb-0 font-sm text-center">
                                        <thead>
                                        <tr>
                                            <th class="compress"></th>
                                            <th>En (cm)</th>
                                            <th>Boy (cm)</th>
                                            <th>Alan (m<sup>2</sup>)</th>
                                            <th>Çevre (m)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th class="text-right">Birim</th>
                                            <td><span id="calc-w">100</span></td>
                                            <td><span id="calc-h">100</span></td>
                                            <td><span id="calc-area">1.0000</span></td>
                                            <td><span id="calc-perimeter">4.0000</span></td>
                                        </tr>
                                        <tr>
                                            <th class="text-right">Toplam</th>
                                            <td><span id="total-calc-w">100</span></td>
                                            <td><span id="total-calc-h">100</span></td>
                                            <td><span id="total-calc-area">1.0000</span></td>
                                            <td><span id="total-calc-perimeter">4.0000</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                  </div>

                                <hr>


                                @if($product->additional_options != NULL)
                                <p>Ek Seçenekler</p>
                                    @foreach( $product->additionaloptionsparent($product->additional_options) as $options)
                                        @foreach($options as $key => $option)
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text bg_default text-white "  for="inputGroupSelect01">{{$option->name}}</label>
                                    </div>

                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option value="0"> ----- </option>
                                        @foreach($product->additionaloption($option->id)  as $opt)
                                                <option value="{{$opt->id}}">{{$opt->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                        @endforeach
                                    @endforeach
                                @endif

                            </div>
                            <hr />

                            <ul class="product-meta d-inline">
                                <li class="text-default">Ürün Sipariş Kodu :  <a href="{{route('showProducts',[$product->id,$product->slug])}}"> {{$product->product_code}}</a></li>
                            </ul>
                            <div class="cart_extra mt-2">
                                <div class="cart-product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus">
                                        <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </div>
                                <div class="cart_btn">
                                    <button class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i> Sepete Ekle</button>

                                </div>
                            </div>
                            <hr />
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- END SECTION SHOP -->

      @include('Site.partials.subscribe')
    </div>
    <!-- END MAIN CONTENT -->


@endsection
