@extends('layouts.homepages.glance')
@section('title')
    Trang Search
@endsection
@section('content')
    <!-- short -->
    <div class="using-border py-3">
        <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
                <li>
                    <a href="index.html">Home</a>
                    <span>/ /</span>
                </li>
                <li>Shop Now</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <!--show Now-->
    <!--show Now-->
    <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="margin-top: 70px">---Foods---</h3>
            <div class="row">
                <div class="side-bar col-lg-3">
                    <div class="left-side">
                        <h3 class="agileits-sear-head">Categories</h3>
                        <ul>
                            @foreach($list as $ls)
                                <li>
                                    <a href="{{url('shop/category/'.$ls->id)}}"><span class="span">{{$ls->name}}</span></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="left-ads-display col-lg-9">
                    <div class="row">

                        @if($result->count() < 1)
                            <h2>No result {{$result->count()}}</h2>
                        @endif

                        @foreach($result as $product)
                            <?php
                            $images = (isset($product->images) && $product->images) ? json_decode($product->images) :array();
                            ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                            <div class="product-toys-info">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <?php if (count($images)):?>
                                        @foreach($images as $image)
                                            <img src="{{asset($image)}}" style="height: 280px" class="img-thumbnail img-fluid" alt="">
                                            @break
                                            @endforeach
                                        <?php endif;?>
                                            <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('shop/product/'.$product->id)}}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <h4>
                                                        <a href="single.html">{{$product->name}}</a>
                                                    </h4>
                                                    <div class="grid-price mt-2">
                                                        <span class="money ">{{$product->priceSale}} VND</span>
                                                    </div>
                                                </div>
                                                <ul class="stars">
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-star" ></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="far fa-star-half-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="toys single-item hvr-outline-out">
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
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="clearfix"></div>
                    {{$result->links()}}
                </div>

            </div>
        </div>
    </section>
    <!-- //show Now-->




@endsection


