@extends('layouts.homepages.glance')
@section('title')
    Giỏ Hàng
@endsection
@section('content')

    <style type="text/css">
        #custom-cart .banner-bottom, .team, .checkout, .additional_info, .team-bottom, .single, .mail, .special-deals, .about, .faq, .typo, .new-products, .banner-bottom1, .top-brands, .dresses, .w3l_related_products {
            padding: 5em 0;
        }

        #custom-cart .checkout h3 {
            font-size: 1em;
            color: #212121;
            text-transform: uppercase;
            margin: 0 0 3em;
        }
        #custom-cart .checkout h3 span {
            color: #ff9b05;
        }
        #custom-cart table.timetable_sub {
            width: 100%;
            margin: 0 auto;
        }
        #custom-cart .timetable_sub thead {
            background: #F2F2F2;
        }
        #custom-cart .timetable_sub th:nth-child(1) {
            border-left: 1px solid #C5C5C5;
        }
        #custom-cart .timetable_sub th,#custom-cart .timetable_sub td {
            text-align: center;
            padding: 7px;
            width: 1px;
            font-size: 14px;
            color: #212121;
        }
        #custom-cart .timetable_sub td {
            border: 1px solid #CDCDCD;
        }
        #custom-cart a {
            color: #337ab7;
            text-decoration: none;
        }
        #custom-cart td.invert-image a img {
            width: 30%;
            margin: 0 auto;
        }
        #custom-cart .quantity-select .entry.value-minus, .quantity-select .entry.value-minus1 {
            margin-left: 0;
        }
    </style>
    <div id="custom-cart">

    <div class="checkout" style="margin-top: 150px">
        <div class="container">
            <h3>Your shopping cart contains: <span>{{ \Cart::getTotalQuantity()}} Sản Phẩm </span></h3>
            <!---728x90--->

            <div class="checkout-right">
                <table class="timetable_sub">
                    <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>Product</th>
                        <th>Quality</th>
                        <th>Product Name</th>
                        <th>Giá Sản Phẩm</th>
                        <th>Giá Số Lượng</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1?>
                    @foreach($cart_products as $cart_product)
                        <tr class="rem{{$i}} rem">
                            <td class="invert">{{$i}}</td>
                            <?php $product_id = $cart_product->id?>
                            <?php $images = (isset($products[$product_id]->images) &&$products[$product_id]->images)  ?json_decode($products[$product_id]->images):array();?>

                            <td class="invert-image">
                                <a href="{{url('shop/product/'.$product_id)}}">
                                    @foreach($images as $image)
                                        <img src="{{asset($image)}}" alt=" " style="max-width: 400px" class="img-responsive">
                                        @break
                                    @endforeach
                                </a>
                            </td>
                            <td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus" data-id="{{$cart_product->id}}">&nbsp;</div>
                                        <div class="entry value"><span>{{$cart_product->quantity}}</span></div>
                                        <div class="entry value-plus active" data-id="{{$cart_product->id}}" >&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td class="invert">{{$cart_product->name}}</td>
                            <td class="invert"><?php echo number_format($cart_product->price)?> VND</td>
                            <td class="invert"><?php echo number_format($cart_product->price * $cart_product->quantity)?> VND</td>
                            <td class="invert">
                                <div class="rem">
                                    <div class="close1" data-id="{{$cart_product->id}}"> </div>
                                    @csrf
                                </div>

                            </td>
                        </tr>

                        <?php $i++;?>
                    @endforeach

                    </tbody></table>
            </div>
            <div class="checkout-left">
                <div class="checkout-left-basket">
                    <h4><a href="{{url('/shop/payment')}}" style="color: white">Thanh Toán</a></h4>
                    <ul>
                        @foreach($cart_products as $cart_product)
                            <li>{{$cart_product->name}} <i>-</i> <span><?php echo number_format($cart_product->price *$cart_product->quantity)?> VND</span></li>
                        @endforeach
                        <li>Tổng Tiền <i>-</i> <span><?php echo number_format($total_payment)?> VND</span></li>
                    </ul>
                </div>
                <div class="checkout-right-basket">
                    <a href="{{url('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Tiếp Tục Mua Sắm</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    </div>
    <script>$(document).ready(function(c) {
            $('.close1').on('click', function(c){

                var add_cart_url ='<?php echo url('shop/cart/remove')?>';

                var pid = $(this).data('id');
                var token = $('input[name="_token"]').val();


                var dataPost = {pid: pid,'_token':token};

                console.log(dataPost);

                var t =$(this);
                    /*
                    * Post den controller*/
                $.ajax(
                    {
                        url:add_cart_url,
                        dataType:'json',
                        Type:'POST',
                        data:dataPost,
                        success:function (result) {
                            t.closest('tr').fadeOut('slow', function(c){
                                $(this).closest('tr').remove();
                                location.reload();
                            });
                        }});
            });
        });
    </script>

    <!--quantity-->
    <script>
            $('.value-plus').on('click', function(){
                var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
                divUpd.text(newVal);

                var add_cart_url ='<?php echo url('shop/cart/update')?>';
                var pid = $(this).data('id');
                var token = $('input[name="_token"]').val();

                var dataPost = { pid: pid, quantity: newVal, '_token':token};

                var t =$(this);
                /*
                * Post den controller*/
                $.ajax({
                    url:add_cart_url,
                    dataType:'json',
                    Type:'POST',
                    data:dataPost,
                    success:function (result) {
                        location.reload();
                    }});

            });


            $('.value-minus').on('click', function(){
                var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
                if(newVal>=1) divUpd.text(newVal);

                var add_cart_url ='<?php echo url('shop/cart/update')?>';

                var pid = $(this).data('id');
                var token = $('input[name="_token"]').val();


                var dataPost = {pid: pid,quantity: newVal, '_token':token};

                var t =$(this);
                /*
                * Post den controller*/
                $.ajax({
                    url:add_cart_url,
                    dataType:'json',
                    Type:'POST',
                    data:dataPost,
                    success:function (result) {
                        location.reload();
                    }});
            });


    </script>
    <!--quantity-->
@endsection