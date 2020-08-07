<?php

$instajson= file_get_contents('https://www.instagram.com/tiryakioglupixelreklam/?__a=1');
if(isset($instajson))
    $instadata = json_decode($instajson,true);
$image[]='';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="baskimedya">
    <meta name="keywords" content="baskimedya,baski,medya">

    <!-- SITE TITLE -->
    <title>Baskimedya.com</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/linearicons.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/simple-line-icons.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="/assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/slick-theme.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

</head>

<body>

{{--<!-- LOADER -->--}}
{{--<div class="preloader">--}}
{{--    <div class="lds-ellipsis">--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- END LOADER -->--}}

<!-- Home Popup Section -->

<!-- End Screen Load Popup Section -->

<!-- START HEADER -->
<header class="header_wrap fixed-top dd_dark_skin transparent_header">
    <div class="light_skin main_menu_uppercase">
        <div class="container">
            <div class="top-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div   class="d-flex align-items-center justify-content-center justify-content-md-start"  >
                                <ul class="contact_detail text-center text-lg-left">
                                    <li ><i class="ti-mobile"></i><span>{{$setting->phone}}</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center text-md-right">
                                <ul class="header_list">
                                    <li><a href="{{route('site.login')}}" ><i class="ti-user"></i><span >Giriş Yap</span></a></li>
                                    <li><a href="wishlist.html" ><i class="ti-heart"></i><span >Kayıt ol</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{route('site.index')}}">
                    <img class="logo_light" src="/assets/images/logo_light.png" alt="logo" />
                    <img class="logo_dark" src="/assets/images/logo_dark.png" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link nav_item" href="{{route('site.index')}}">ANA SAYFA</a>
                        </li>
                        <li>
                            <a class="nav-link nav_item" href="{{route('site.product')}}">ÜRÜNLERİMİZ</a>
                        </li>
                        <li>
                            <a class="nav-link nav_item" href="{{route('site.about')}}">HAKKIMIZDA</a>
                        </li>
                        <li>
                            <a class=" nav-link nav_item" href="{{route('site.gallery')}}">GALERİ</a>
                        </li>
                        <li><a class="nav-link nav_item" href="{{route('site.contact')}}">İLETİŞİM</a></li>
                        </li>
                        <li><a class="nav-link nav_item" href="#">ÜCRETSİZ KATALOG</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div><div class="search_overlay"></div><div class="search_overlay"></div>
                    </li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->
@yield('content')
<!-- START FOOTER -->
<footer class="footer_dark">
    <div class="footer_top">
        <div class="container">
            <div class="row">
           <!-- <div class="row"> -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="widget">
                        <h6 class="widget_title">İletişim Bilgileri</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>{{$setting->address}}</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com">{{$setting->email}}</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>{{$setting->number}}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <ul class="social_icons rounded_social">
                            <li><a href="{{$setting->facebook}}" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="{{$setting->youtube}}" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="{{$setting->instagram}}" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Faydalı Linkler</h6>
                        <ul class="widget_links">
                            @foreach($infocategory as $inform)
                            <li><a href="#">{{$inform->name}}</a></li>
                            @endforeach
                            <li><a href="#">Bize Ulaşın</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Hesap İşlemleri</h6>
                        <ul class="widget_links">
                            <li><a href="#">Hesabım</a></li>
                            <li><a href="#">İndirim Kuponları</a></li>
                            <li><a href="#">Sipariş Geçmişi</a></li>
                            <li><a href="#">Sipariş Takibi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="widget">
                        <h6 class="widget_title">Instagram</h6>
                        <ul class="widget_instafeed instafeed_col4">
                            @if(isset($instadata))
                            @foreach(array_slice($instadata['graphql']['user']['edge_owner_to_timeline_media']['edges'],0,8) as $image)
                                <li><a href="#"><img src="<?=$image['node']['display_url']?>" alt="insta_img" style="width: 100px;height: 100px;"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                              @endforeach
                                @endif
                        </ul>
                    </div>
                </div>
           <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="bottom_footer bg_dark4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">© created by <a href="dijipr.com">DijiPR</a></p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-md-right">
                        <li><a href="#"><img src="/assets/images/visa.png" alt="visa"></a></li>
                        <li><a href="#"><img src="/assets/images/discover.png" alt="discover"></a></li>
                        <li><a href="#"><img src="/assets/images/master_card.png" alt="master_card"></a></li>
                        <li><a href="#"><img src="/assets/images/paypal.png" alt="paypal"></a></li>
                        <li><a href="#"><img src="/assets/images/amarican_express.png" alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

</body>

<!-- Latest jQuery -->
<script src="/assets/js/jquery-1.12.4.min.js"></script>
<!-- popper min js -->
<script src="/assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="/assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="/assets/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="/assets/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="/assets/js/parallax.js"></script>
<!-- countdown js  -->
<script src="/assets/js/jquery.countdown.min.js"></script>
<!-- imagesloaded js -->
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js -->
<script src="/assets/js/isotope.min.js"></script>
<!-- jquery.dd.min js -->
<script src="/assets/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="/assets/js/slick.min.js"></script>
<!-- elevatezoom js -->
<script src="/assets/js/jquery.elevatezoom.js"></script>
<!-- scripts js -->
@yield('js')
<script src="/assets/js/scripts.js?v=W2w349005t34SFGER45343"></script>

</html>
