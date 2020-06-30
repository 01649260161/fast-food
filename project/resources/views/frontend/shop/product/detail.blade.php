@extends('layouts.homepages.glance')
@section('title')
    Sản Phẩm {{$product->name}}
@endsection
@section('content')

    <style type="text/css">

        .resp-tabs-container,.responsive_tabs{
            width: 100%;
        }
    </style>

    <?php
        $images = (isset($product->images) && $product->images) ? json_decode($product->images) :array();
    ?>
    <section class="banner-bottom py-lg-5 py-3" style="margin-top: 250px">
            <div class="container">
                <div class="inner-sec-shop pt-lg-4 pt-3">
                    <div class="row">
                        <div class="col-lg-4 single-right-left ">
                            <div class="grid images_3_of_2">
                                <div class="flexslider1">
                                    <ul class="slides">
                                        @foreach($images as $image)
                                        <li data-thumb="{{$image}}">
                                            <div class="thumb-image"> <img src="{{asset($image)}}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                    <h3>{{$product->name}}</h3>
                            <p><span class="item_price">{{number_format($product->priceSale)}} VND</span>
                                <del>{{number_format($product->priceCore)}} VND</del>
                            </p>
                            <p>Discount : <?php if($product->priceCore > $product->priceSale){
                                    $price = $product->priceCore - $product->priceSale;
                                    echo (int)(($price/($product->priceCore))*100);
                                }else{
                                    echo (int)(($product->priceSale/($product->priceCore))*100);
                                }?>%</p>
                            <?php echo 'Mô Tả Ngắn:' .$product->intro?>

                            <form action="<?php echo url('shop/cart/add')?>" method="get">
                                @csrf
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="w3ls1_item" value="{{$product->id}}">
                                <input type="hidden" name="amount" value="{{$product->priceSale}}">
                                <button type="submit" class="toys-cart ptoys-cart">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </form>
                            <div class="rating1">
                                <ul class="stars">
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="description">
                                <?php echo $product->ship_info?>
                            </div>

                            <ul class="footer-social text-left mt-lg-4 mt-3">
                                <li>Share On : </li>
                                <li class="mx-1">
                                    <a href="#">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li class="mx-1">
                                    <a href="#">
                                        <span class="fab fa-google-plus-g"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#">
                                        <span class="fab fa-linkedin-in"></span>
                                    </a>
                                </li>
                                <li class="mx-1">
                                    <a href="#">
                                        <span class="fas fa-rss"></span>
                                    </a>
                                </li>
                            </ul>
                                    </div>
                                    <div class="col-md-6 form-review-customer">
                                    <h3 style="text-align: center;">Reviews Customer</h3>
                                        <div class="form-reviews">
                                            <ul>
                                                @if(count($reviews) != 0)
                                                @foreach($reviews as $review)
                                                <li>
                                                    <label style="color: blue;" for="">{{$review->name . " :"}}</label>
                                                    <p>{{$review->content}}</p>
                                                </li>
                                                @endforeach
                                                @else
                                                    <div style="text-align: center;padding-top:25px">Chưa có review nào</div>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="clearfix"> </div>
                        <!--/tabs-->
                        <div class="responsive_tabs">
                            <div id="horizontalTab">
                                <ul class="resp-tabs-list">
                                    <li>Description</li>
                                    <li>Reviews</li>
                                    <li>Information</li>
                                    <li>Help</li>
                                </ul>
                                <div class="resp-tabs-container">
                                    <!--/tab_one-->
                                    <div class="tab1">
                                        <div class="single_page">
                                            <h6>Lorem ipsum dolor sit amet</h6>
                                            <?php echo $product->desc;?>
                                        </div>
                                    </div>
                                    <!--//tab_one-->
                                    <div class="tab2">
                                        <div class="single_page">
                                            <div class="bootstrap-tab-text-grids">
                                                <div class="bootstrap-tab-text-grid">

                                                   
                                                </div>
                                                <div class="add-review">
                                                    <h4>add a review</h4>
                                                    <form action="{{ url('review/'.$product->id) }}" method="post">
                                                    @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="text" name="name" required="">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="email" name="email" required="">
                                                            </div>
                                                        </div>
                                                        <textarea name="content" required=""></textarea>
                                                        <input type="submit" value="SEND">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab3">
                                        <div class="single_page">
                                            <h6>Lorem ipsum dolor sit amet</h6>
                                            <?php echo $product->infomation?>
                                        </div>
                                    </div>
                                    <div class="tab4">
                                        <div class="single_page">
                                            <h6>Lorem ipsum dolor sit amet</h6>
                                            <?php echo $product->help?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//tabs-->
                    </div>
                </div>
            </div>
        </section>
<style>
    .form-review-customer .form-reviews{
        border: 1px solid #ccc;
        box-sizing: border-box;
        overflow: auto;
        height: 420px;
    }
    .form-review-customer .form-reviews>ul>li{
        border-bottom: 1px solid #ccc;
    }
    .form-review-customer .form-reviews>ul>li p{
        font-size: 12px;
    }
</style>
@endsection