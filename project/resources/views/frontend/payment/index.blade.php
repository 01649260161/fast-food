@extends('layouts.homepages.glance')
@section('title')
    Thanh Toán
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
    <div class="using-border py-3" style="margin-top: 250px">
        <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
                <li>
                    <a href="index.html">Home</a>
                    <span>/ /</span>
                </li>
                <li>Payment</li>
            </ul>
        </div>
    </div>
    <div id="custom-cart" >
        <div class="checkout" style="margin-top: 0px">
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
                            <th>Service Charges</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i =1?>
                        @foreach($cart_products as $cart_product)
                            <tr class="rem1">
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
                                            <div class="entry value"><span>{{$cart_product->quantity}}</span></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">{{$cart_product->name}}</td>
                                <td class="invert"><?php echo number_format($cart_product->price)?> VND</td>
                                <td class="invert"><?php echo number_format($cart_product->price * $cart_product->quantity)?> VND</td>
                            </tr>
                            <?php $i++;?>
                        @endforeach
                        <!--quantity-->
                        <script>
                            $('.value-plus').on('click', function(){
                                var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
                                divUpd.text(newVal);
                            });

                            $('.value-minus').on('click', function(){
                                var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
                                if(newVal>=1) divUpd.text(newVal);
                            });
                        </script>
                        <!--quantity-->
                        </tbody></table>
                </div>

            </div>
        </div>
    </div>
    <style>
        #w3payment {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        #w3payment .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }

        #w3payment .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        #w3payment .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }

        #w3payment .col-25,
        #w3payment .col-50,
        #w3payment .col-75 {
            padding: 0 16px;
        }

        #w3payment .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        #w3payment input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        #w3payment label {
            margin-bottom: 10px;
            display: block;
        }

        #w3payment .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        #w3payment .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        #w3payment .btn:hover {
            background-color: #45a049;
        }

        #w3payment span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            #w3payment .row {
                flex-direction: column-reverse;
            }
            #w3payment .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>


    <h1 style="text-align: center"><?php echo number_format($total_payment)?> VND</h1>
    <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>

    <!-- //short-->
    <!-- top Products -->
    <div class="row" id="w3payment">
        <div class="col-75">
            <div class="container">
                <form name="order_form" action="{{url('shop/payment')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Tên Đầy Đủ</label>
                            <input type="text" id="fname" name="customer_name" placeholder="John M. Doe">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="customer_email" placeholder="john@example.com">


                            <div class="row">
                                <div class="col-50">
                                    <label for="state">Quốc Gia</label>
                                    <input type="text" id="customer_country" name="customer_country" placeholder="VN">
                                </div>
                                <div class="col-50">
                                    <label for="zip">Số Điện Thoại</label>
                                    <input type="text" id="customer_phone" name="customer_phone" placeholder="0341234567">
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="adr"><i class="fa fa-address-card-o"></i> Địa Chỉ</label>
                            <input type="text" id="adr" name="customer_address" placeholder="542 W. 15th Street">
                            <label for="city"><i class="fa fa-institution"></i> Thành Phố</label>
                            <input type="text" id="city" name="customer_city" placeholder="New York">

                        </div>

                    </div>
                    <div>
                        <label>Ghi Chứ</label>
                        <textarea name="customer_note" style="width: 100%" rows="10" id="" ></textarea>
                    </div>
                    <label>

                    </label>
                    <input type="submit" value="Continue to checkout" class="btn">
                </form>
            </div>
        </div>
    </div>
@endsection