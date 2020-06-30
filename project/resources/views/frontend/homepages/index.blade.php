<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Humburger Restaurants Category Bootstrap Responsive Template | Home :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Humburger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{asset('frontend_assets/css/bootstrap.css')}}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{asset('frontend_assets/css/style.css')}}" type="text/css" media="all" />

    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="{{asset('frontend_assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
</head>
<style>
    .menu-content{
        margin-top: 18px;
        background: #ccc;
        z-index: 1;
    }
    .ml-auto>li{
        margin-left: -30px;
    }
    .inner-ul.menu-content{
        width: 100%;
    }
</style>
<body>
<!-- mian-content -->
<?php
    // echo "<pre>";
    // print_r($fe_global_contact);
    // echo "</pre>";
    // die;
?>
<?php $banner_main_location = isset($banner_main->image) ? asset($banner_main->image): ''?>
<?php $sale1_banner_location = isset($sale1_banner->image) ? asset($sale1_banner->image) : ''?>
<?php $sale2_banner_location = isset($sale2_banner->image) ? asset($sale2_banner->image) : ' '?>
<?php $sale3_banner_location = isset($sale3_banner->image) ? asset($sale3_banner->image): ' '?>
<?php $sale4_banner_location = isset($sale4_banner->image) ? asset($sale4_banner->image): ' '?>
<?php $sale5_banner_location = isset($sale5_banner->image) ? asset($sale5_banner->image): ' '?>
<?php $sale6_banner_location = isset($sale6_banner->image) ? asset($sale6_banner->image): ' '?>
<?php $sale7_banner_location = isset($sale7_banner->image) ? asset($sale7_banner->image): ' '?>
<?php $sale8_banner_location = isset($sale8_banner->image) ? asset($sale8_banner->image): ' '?>
<?php $sale9_banner_location = isset($sale9_banner->image) ? asset($sale9_banner->image): ' '?>
<div class="main-content" id="home" style="background-image: url({{$banner_main_location}})">
    <div class="layer">
        <!-- header -->
        <header>
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4 d-lg-flex">
                    <div id="logo">
                        <h1> <a href="{{url('/')}}"><img src="{{asset($fe_global_setting['header_logo'])}}" style="width: 30px;height: 30px" alt="">{{$fe_global_setting['web_name']}}</a></h1>
                    </div>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2 ml-auto">
                        <li class="active"><a href="index.blade.php">Home</a></li>
                        <li><a href="#about" class="scroll">About</a></li>
                        <li><a href="#menu" class="scroll">Menu</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul class="inner-ul">
                                <li><a class="scroll" href="#gallery">Gallery</a></li>
                                <li><a href="#services" class="scroll">Services</a></li>
                                <li><a href="#menu" class="scroll">Menu</a></li>
                            </ul>
                        </li>
                        <li><a href="#testimonials" class="scroll">Reviews</a></li>
                        <li><a href="#contact" class="scroll">Contact</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Login<span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Login<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul class="inner-ul">
                                <li><a href="{{route('login')}}" class="scroll">User</a></li>
                                <li><a href="{{route('admin.auth.login')}}" class="scroll" >Admin</a></li>
                                <li><a href="{{route('shipper.auth.login')}}" class="scroll">Shipper</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
        <div class="container">
            <!-- /banner -->


            <div class="banner-info-w3layouts text-center">
                <h3>Burger Special</h3>
                <div class="read-more">
                    <a href="#about" class="read-more scroll">Read More </a> </div>
            </div>
            <div class="row order-info">
                <div class="middle mt-3 col-md-6 text-left">
                    <ul class="social mb-4">
                        <li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
                        <li><a href="#"><span class="fa fa-dribbble icon_dribbble"></span></a></li>
                    </ul>

                </div>
                <div class="middle-right mt-md-3 col-md-6 text-right">
                    <h6><span class="fa fa-phone"></span> Order Now : {{$fe_global_contact['phone']}}</h6>
                </div>
            </div>
        </div>
        <!-- //banner -->
    </div>
</div>
<!--// mian-content -->
<!-- banner-bottom-wthree -->
<div class="middile-inner-con">

    <div class="tab-main mx-auto text-center">

        <div class="container-fluid px-lg-5">

            <nav class="py-4 d-lg-flex">
                <?php echo $fe_menus_items_header_html?>
            </nav>
        </div>

    </div>
</div>

@if(isset($sale1_banner->id))
<section class="banner-bottom-wthree py-5" id="about">
    <div class="container py-md-3">
        <div class="row banner-grids">
            <div class="col-md-6 content-left-bottom text-left pr-lg-5">
                <?php echo ($sale1_banner->desc);?>
            </div>
            <div class="col-md-6 content-right-bottom text-left">
                <img src="{{url($sale1_banner_location)}}" alt="news image" class="img-fluid">
            </div>
        </div>
    </div>
</section>
@endif
<!-- //banner-bottom-wthree -->
<!--/ about -->
<section class="services py-5" id="services">
    <div class="container py-md-5">
        <div class="header pb-lg-3 pb-3 text-center">
            <h3 class="tittle two mb-lg-3 mb-3">What kind of Foods we serve for you</h3>
        </div>
        <div class="row ab-info mt-lg-4">
            @if(isset($sale2_banner->id))
            <div class="col-lg-3 ab-content">
                <div class="ab-content-inner">
                    <a href="{{$sale2_banner->link}}"><img src="{{url($sale2_banner_location)}}" alt="news image" class="img-fluid"></a>
                    <div class="ab-info-con">
                        <?php echo ($sale2_banner->desc);?>
                    </div>
                </div>
            </div>
            @endif
            @if(isset($sale3_banner->id))
            <div class="col-lg-3 ab-content">
                <div class="ab-content-inner">
                    <a href="{{$sale3_banner->link}}"><img src="{{url($sale3_banner_location)}}" alt="news image" class="img-fluid"></a>
                    <div class="ab-info-con">
                        <?php echo ($sale3_banner->desc);?>
                    </div>
                </div>
            </div>
            @endif
            @if(isset($sale4_banner->id))
            <div class="col-lg-3 ab-content">
                <div class="ab-content-inner">
                    <a href="{{$sale4_banner->link}}"><img src="{{url($sale4_banner_location)}}" alt="news image" class="img-fluid"></a>
                    <div class="ab-info-con">
                        <?php echo ($sale4_banner->desc);?>
                    </div>
                </div>
            </div>
            @endif
            @if(isset($sale5_banner->location_id))
            <div class="col-lg-3 ab-content">
                <div class="ab-content-inner">
                    <a href="{{$sale5_banner->link}}"><img src="{{url($sale5_banner_location)}}" alt="news image" class="img-fluid"></a>
                    <div class="ab-info-con">
                        <?php echo ($sale5_banner->desc);?>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
<!--// about -->
<!--/mid-sec-->
<section class="mid-sec py-5" id="menu">
    <div class="container-fluid py-lg-5">
        <div class="header pb-lg-3 pb-3 text-center">
            <h3 class="tittle mb-lg-3 mb-3">Bigger & Bolder</h3>
        </div>
        <div class="middile-inner-con">
            <div class="tab-main mx-auto text-center">
                <?php $i=1;?>
                <?php $j=1;?>
                @foreach($homepage_category as $category)
                    <input id="tab{{$i}}" type="radio" name="tabs" checked="">
                    <label for="tab{{$i}}"><span class="fa fa-align-center" aria-hidden="true"></span> {{$category->name}}</label>
                    <?php $i++?>
                @endforeach

                @foreach($homepage_category as $category)
                    <section id="content{{$j}}">
                        <div class="ab-info row">
                            @if(isset($category['products']))
                                @foreach($category['products'] as $product)
                                    <?php
                                    $images = (isset($product->images) && $product->images) ? json_decode($product->images) :array();
                                    ?>

                                    <div class="col-md-3 ab-content">
                                        <a href="{{url('shop/product/'.$product->id)}}">
                                        <div class="tab-wrap" style="height: 378.54px;margin-bottom: 25px">
                                            <?php if (count($images)):?>
                                            @foreach($images as $image)
                                                <img src="{{asset($image)}}" style="width: 136.56px;height: 135.5px" alt="news image" class="img-fluid">
                                                @break
                                            @endforeach
                                            <?php endif;?>
                                            <div class="ab-info-con">
                                                <h4>{{$product->name}}</h4>
                                                <p class="price">{{number_format($product->priceSale)}} VND</p>
                                            </div>
                                        </div>
                                        </a>
                                    </div>

                                @endforeach
                            @endif
                        </div>
                    </section>
                    <?php $j++?>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--//mid-sec-->
<!--/order-now-->
<section class="order-sec pb-5 pt-md-0 pt-5" id="order">
    <div class="container py-lg-3">
        <div class="test-info text-center">
            <h3 class="tittle order">
                <span>Free Delivery With</span>Burger Of the Day</h3>

            <div class="row mt-lg-4 mt-3">
                <div class="col-md-6 order-left-content text-right">
                    <h4>$99</h4>
                </div>
                <div class="col-md-6 order-right-content text-left">
                    <ul class="tic-info list-unstyled">
                        <li>

                            <span class="fa fa-long-arrow-right mr-2"></span> Integer sit amet mattis quam

                        </li>
                        <li>

                            <span class="fa fa-long-arrow-right mr-2"></span> Praesent ullamcorper dui turpis

                        </li>
                        <li>

                            <span class="fa fa-long-arrow-right mr-2"></span> Integer sit amet mattis quam

                        </li>

                    </ul>
                </div>
                <div class="read-more mx-auto text-center">
                    <a href="#contact" class="read-more scroll">Read More </a> </div>
            </div>
        </div>
    </div>
</section>
<!--//order-now-->

<!-- Gallery -->
<section class="gallery py-5" id="gallery">
    <div class="container py-md-5">
        <div class="header text-center">
            <h3 class="tittle mb-lg-5 mb-3">Our Gallery</h3>
        </div>
        <div class="row news-grids text-center gallery-wrap">
            <div class="col-md-3 gal-img">
                <a href="#gal1"><img src="{{url($sale6_banner_location)}}" style="height: 300.42px;width: 257.5px" alt="news image" class="img-fluid"></a>
            </div>
            <div class="col-md-3 gal-img">
                <a href="#gal2"><img src="{{url($sale7_banner_location)}}" style="height: 300.42px;width: 257.5px" alt="news image" class="img-fluid"></a>
            </div>
            <div class="col-md-3 gal-img">
                <a href="#gal3"><img src="{{url($sale8_banner_location)}}" style="height: 300.42px;width: 257.5px" alt="news image" class="img-fluid"></a>
            </div>
            <div class="col-md-3 gal-img">
                <a href="#gal4"><img src="{{url($sale9_banner_location)}}" style="height: 300.42px;width: 257.5px" alt="news image" class="img-fluid"></a>
            </div>

        </div>

        <!-- popup-->
        <div id="gal1" class="pop-overlay animate">
            <div class="popup">
                <img src="{{url($sale6_banner_location)}}" style="width: 507.58px;height: 400.17px" alt="Popup Image" class="img-fluid" />

                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->

        <!-- popup-->
        <div id="gal2" class="pop-overlay animate">
            <div class="popup">
                <img src="{{url($sale7_banner_location)}}" style="width: 507.58px;height: 400.17px" alt="Popup Image" class="img-fluid" />

                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal3" class="pop-overlay animate">
            <div class="popup">
                <img src="{{url($sale8_banner_location)}}" style="width: 507.58px;height: 400.17px" alt="Popup Image" class="img-fluid" />

                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup3 -->
        <!-- popup-->
        <div id="gal4" class="pop-overlay animate">
            <div class="popup">
                <img src="{{url($sale9_banner_location)}}" style="width: 507.58px;height: 400.17px" alt="Popup Image" class="img-fluid" />

                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->


    </div>
</section>
<!--// gallery -->

<!--/testimonials-->
<section class="testimonials" id="testimonials">
    <div class="layer footer">
        <div class="container py-5">
            <div class="test-info text-center">
                <h3 class="my-md-2 my-3"><?php  echo isset($last_review->name)? $last_review->name:"HienTm";?></h3>

                <ul class="list-unstyled w3ls-icons clients mb-md-4">
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star-half-o"></span>
                        </a>
                    </li>
                </ul>
                <p><span class="fa fa-quote-left"></span><?php  echo isset($last_review->content)? $last_review->content:"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam sit omnis, numquam dolorem veniam laudantium, est ratione mollitia nesciunt necessitatibus molestias nihil harum ipsum ea enim temporibus magnam cumque a?";?><span class="fa fa-quote-right"></span></p>

            </div>
        </div>
    </div>
</section>
<!--//testimonials-->
{{--<div class="top-brands">
    <div class="container">
        <h3>Top Brands</h3>
        <div class="sliderfig">
            <div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul id="flexiselDemo1" class="nbs-flexisel-ul" style="left: -285px; display: block;">


                        <li class="nbs-flexisel-item" style="width: 285px;">
                            <img src="http://localhost/laravel_1809e/authen/public/frontend_assets/images/6.png" alt=" " class="img-responsive">
                        </li>
                        <li class="nbs-flexisel-item" style="width: 285px;">
                            <img src="http://localhost/laravel_1809e/authen/public/frontend_assets/images/7.png" alt=" " class="img-responsive">
                        </li>
                        <li class="nbs-flexisel-item" style="width: 285px;">
                            <img src="http://localhost/laravel_1809e/authen/public/frontend_assets/images/46.jpg" alt=" " class="img-responsive">
                        </li>
                        <li class="nbs-flexisel-item" style="width: 285px;">
                            <img src="http://localhost/laravel_1809e/authen/public/frontend_assets/images/4.png" alt=" " class="img-responsive">
                        </li><li class="nbs-flexisel-item" style="width: 285px;">
                            <img src="http://localhost/laravel_1809e/authen/public/frontend_assets/images/5.png" alt=" " class="img-responsive">
                        </li><li class="nbs-flexisel-item" style="width: 285px;">
                            <img src="http://localhost/laravel_1809e/authen/public/frontend_assets/images/6.png" alt=" " class="img-responsive">
                        </li><li class="nbs-flexisel-item" style="width: 285px;">
                            <img src="http://localhost/laravel_1809e/authen/public/frontend_assets/images/7.png" alt=" " class="img-responsive">
                        </li><li class="nbs-flexisel-item" style="width: 285px;">
                            <img src="http://localhost/laravel_1809e/authen/public/frontend_assets/images/46.jpg" alt=" " class="img-responsive">
                        </li><li class="nbs-flexisel-item" style="width: 285px;">
                            <img src="http://localhost/laravel_1809e/authen/public/frontend_assets/images/4.png" alt=" " class="img-responsive">
                        </li><li class="nbs-flexisel-item" style="width: 285px;">
                            <img src="http://localhost/laravel_1809e/authen/public/frontend_assets/images/5.png" alt=" " class="img-responsive">
                        </li></ul><div class="nbs-flexisel-nav-left" style="top: 18px;"></div><div class="nbs-flexisel-nav-right" style="top: 18px;"></div></div></div>
        </div>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 4,
                    animationSpeed: 1000,
                    autoPlay: false,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems:2
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="{{asset('shop_assets/js/jquery.flexisel1.js')}}"></script>
    </div>
</div>--}}
<!-- contact -->
<section class="contact py-5" id="contact">
    <div class="container pb-md-5">
        <div class="header py-lg-5 pb-3 text-center">
            <h3 class="tittle mb-lg-5 mb-3"> Newsletter</h3>
        </div>

        <div class="contact-form mx-auto text-left">
            <form name="contactform" id="contactform1" method="post" action="{{url('/newsletter')}}">
                @csrf
                <div class="row">
                    <div class="col-lg-4 con-gd">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" class="form-control" id="name" placeholder="" name="name" required="">
                        </div>
                    </div>
                    <div class="col-lg-4 con-gd">
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" class="form-control" id="email" placeholder="" name="email" required="">
                        </div>
                    </div>
                    <div class="col-lg-4 contact-page">
                        <div class="form-group">
                            <label>Submit *</label>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
        
        <ul class="list-unstyled row text-left mb-lg-5 mb-3">
            <li class="col-lg-4 adress-info">
                <div class="row">
                    <div class="col-md-3 text-lg-center adress-icon">
                        <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="col-md-9 text-left">
                        <h6>Location</h6>
                        <p><?php echo $fe_global_contact['address']?></p>
                    </div>
                </div>
            </li>

            <li class="col-lg-4 adress-info">
                <div class="row">
                    <div class="col-md-3 text-lg-center adress-icon">
                        <span class="fa fa-envelope-open-o"></span>
                    </div>
                    <div class="col-md-9 text-left">
                        <h6>Email</h6>
                        <a href="mailto:tranminhhien130398@gmail.com"><?php echo $fe_global_contact['email']?></a>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 adress-info">
                <div class="row">
                    <div class="col-md-3 text-lg-center adress-icon">
                        <span class="fa fa-mobile"></span>
                    </div>
                    <div class="col-md-9 text-left">
                        <h6>Phone Number</h6>
                        <p><?php echo "+ ". $fe_global_contact['phone']?></p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

</section>
<!-- //contact -->
<!-- footer -->
<footer class="footer-content">
    <div class="layer footer">
        <div class="container-fluid">
            <div class="row footer-top-inner-w3ls">
                <div class="col-lg-4 col-md-6 footer-top mt-md-0 mt-sm-5">
                    <h2>
                        <a href="{{url('/')}}"><img src="{{asset($fe_global_setting['footer_logo'])}}" style="width: 40px;height: 40px" alt="">{{$fe_global_setting['web_name']}}</a>
                    </h2>
                    <?php echo $fe_global_contact['web_intro'];?>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">Opening Hours</h3>
                        <hr>
                        <ul class="list-info-w3pvt last-w3ls-contact mt-lg-4">
                            <li>
                                <p> Monday - Friday 08.00 am - 10.00 pm</p>

                            </li>
                            <li class="my-2">
                                <p>Saturday 08.00 am - 10.00 pm</p>

                            </li>
                            <li class="my-2">
                                <p>Sunday 08.00 am - 10.00 pm</p>

                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">Contact Us</h3>
                        <hr>
                        <div class="last-w3ls-contact">
                            <p>
                                <a href="mailto:tranminhhien130398@gmail.com">tranminhhien130398@gmail.com</a>
                            </p>
                        </div>
                        <div class="last-w3ls-contact my-2">
                            <p><?php echo "+ ". $fe_global_contact['phone']?></p>
                        </div>
                        <div class="last-w3ls-contact">
                            <p><?php echo $fe_global_contact['address']?></p>
                        </div>
                    </div>
                </div>

            </div>

            <p class="copy-right-grids text-li text-center my-sm-4 my-4">© 2019 Humburger. All Rights Reserved | Design by
                <a href="http://w3layouts.com/"> W3layouts </a>
            </p>
            <div class="w3ls-footer text-center mt-4">
                <ul class="list-unstyled w3ls-icons">
                    <li>
                        <a href="#">
                            <span class="fa fa-facebook-f"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-dribbble"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-vk"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="move-top text-right"><a href="#home" class="move-top"> <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a></div>
        </div>
        <!-- //footer bottom -->
    </div>
</footer>
<!-- //footer -->


</body>

</html>
