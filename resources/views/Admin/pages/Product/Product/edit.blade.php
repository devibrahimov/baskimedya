@extends('Admin.index')

@section('css')
{{--    <!-- Internal Select2 css -->--}}
    <link rel="stylesheet" href="/admin/plugins/select2/css/select2.min.css">
@endsection


@section('content')
    <!-- row -->

        <div class="row row-sm">

            <div class="col-lg-7 col-xl-7 col-md-12 col-sm-12">
                <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal" >
                    @csrf
                    @method('PUT')
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Yeni Ürün ekle</h4>
                        <p class="mb-2">Buradan yeni ürün ekleye bilirsiniz</p>
                    </div>
                    <div class="card-body pt-0">

                        <div class="form-group">
                            <label  for="inputName">Ürün İsmi</label>
                          <input type="text" class="form-control" id="inputName" name="name" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Ürün açıklaması</label>
                            <textarea name="description" class="form-control " id="" cols="30" rows="10">{{$product->description }}</textarea>
                        </div>

                        @foreach(json_decode($product->meta) as $k=>$v)
                        <div class="form-group">
                            <label >Ürün Meta {{$k}}</label>
                            <input type="text" class="form-control" id="inputName" name="meta{{$k}}"  value="{{$v}}">
                        </div>
                        @endforeach


                        <div class="row">
                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="product_code">Ürün kodu</label>
                                    <input type="text" class="form-control" name="product_code"   value="{{ $product->product_code }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="price">   Fiyat : (m<sup>2</sup>) fiyatı  </label>
                                    <input type="number" class="form-control" step="0.01"  min="0" name="price"   value="{{$product->price}}">
                                </div>
                            </div>

                        </div>{{--end row--}}
                        <div class="row">
                            <div class="col-lg-6">  <div class="form-horizontal">

                                    <p class="mg-b-10">Ürün Kategorisi</p><select class="form-control select2" name="category" >
                                        <option label="Bir ürün kategorisi seçin">
                                        </option>
                                        @foreach($cats as $cat)
                                            <option value="{{$cat->id}}"@if($product->category == $cat->id) selected @endif>
                                                {{$cat->name}}
                                            </option>
                                        @endforeach

                                    </select>

                                </div></div>

                            <div class="col-lg-6">   <div class="form-horizontal">
                                    <p class="mg-b-10">Ek Seçenekler</p>
                                    <select name="additional_options[]" class="form-control select2" multiple >


                                            @foreach($additionaloptions as $adoption)
                                                    <option value="{{$adoption->id}}" {{in_array($adoption->id,$product_adops)? 'selected' :'' }}   >
                                                        {{$adoption->name}}
                                                    </option>
                                            @endforeach


                                    </select>
                                </div></div>
                        </div>{{--end row--}}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-horizontal mt-2">

                                    <p class="mg-b-10">Seçenekler</p>
                                    <select class="form-control select2" name="option" >
                                        <option label="Ürün için Seçenek seçin">
                                        </option>
                                        @foreach($options as $option)
                                            <option  value="{{$option->id}}" @if($product->parent_option == $option->id) selected @endif>
                                                {{$option->name}}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        <div class="col-lg-6">
                            <div class="form-horizontal mt-5">
                                <div class="row mg-t-10">

                                    <div class="col-lg-6">
                                        <label class="rdiobox"><input name="stock" {{$product->stock==1?'checked':''}} type="radio" value="1"> <span>Ürün Var</span></label>
                                    </div>
                                    <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                        <label class="rdiobox"><input  name="stock" {{$product->stock==0?'checked':''}}  type="radio" value="0"> <span>Ürün Yok</span></label>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>{{--end row--}}
                    </div>
                    <div class="card-footer">
                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <input type="submit" class="btn btn-primary" value="Güncelle">
                                <a href="{{route('product.index')}}" class="btn btn-secondary">Vazgeç</a>
                            </div>
                        </div>
                    </div>
                </div>

                </form>
            </div>

            <div class="col-lg-5 col-xl-5 col-md-12 col-sm-12">


                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">Ürün Resimleri</h4>
                        <p class="mb-2"> </p>
                    </div>
                    <div class="card-body pt-0">

                            <div class="row border-dark">
                                <div class="col-lg-12 col-xl-12 col-md-6 col-sm-6 pro-img-box">
                                    <img src="/storage/uploads/thumbnail/products/medium/{{$product->image}}"   alt="">
                                    <button data-toggle="dropdown" class="btn btn-indigo btn-block">İşlemler <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                                    <div class="dropdown-menu">
                                        <a href="{{route('product.edit',$product->id)}}" class="dropdown-item"> <i class="las la-image"></i> Düzenle</a>

                                        <a href="{{route('product.show',$product->id)}}" class="dropdown-item"> <i class="las la-trash"></i> Sil</a>

                                    </div>
                                </div>

                            </div>


                            <div class="row  border-dark">
                                @foreach($images as $img)
                                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 mt-3 pro-img-box">
                                    <img src="/storage/uploads/thumbnail/products/medium/{{$img->name}}"   alt="">
                                    <button data-toggle="dropdown" class="btn btn-indigo btn-block">İşlemler <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                                    <div class="dropdown-menu">

                                        <a href="{{route('product.edit',$product->id)}}" class="dropdown-item"> <i class="las la-edit"></i> Düzenle</a>

                                        <a href="{{route('product.show',$product->id)}}" class="dropdown-item"> <i class="las la-trash"></i> Sil</a>

                                    </div>
                                </div>
                                @endforeach
                            </div>



                    </div>
                </div>

            </div>
        </div>

        </div>

    <!-- row -->
@endsection


@section('js')

    {{--    <!-- Moment js -->--}}
    <script src="/admin/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

    <!--Internal  jquery.maskedinput js -->
    <script src="/admin/plugins/jquery.maskedinput/jquery.maskedinput.js"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="/admin/plugins/spectrum-colorpicker/spectrum.js"></script>
    <!-- Internal Select2.min js -->
    <script src="/admin/plugins/select2/js/select2.min.js"></script>

    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="/admin/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>
    <!-- Ionicons js -->
    <script src="/admin/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>
    <!--Internal  pickerjs js -->
    <script src="/admin/plugins/pickerjs/picker.min.js"></script>

    <!-- Internal form-elements js -->
    <script src="/admin/js/form-elements.js"></script>
@endsection
