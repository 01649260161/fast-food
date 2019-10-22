<!-- banner -->
<style type="text/css">
    .menu.mt-2.ml-auto li a span {
        color: black;
        background: #999999;
        display: block;
    }
    .menu.mt-2.ml-auto li{
        color: black;
        background: #999999;
        display: block;
    }
    .navbar-light{
        margin: 0 auto;
    }
</style>
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
<div class="inner_page-banner one-img">


</div>
<!--//banner -->
<!--headder-->
<div class="header-outs" id="home">
    <div class="header-bar">
        <div class="info-top-grid">
            <div class="info-contact-agile">
                <ul>
                    <li>
                        <span class="fas fa-phone-volume"></span>
                        <p>+(000)123 4565 32</p>
                    </li>
                    <li>
                        <span class="fas fa-envelope"></span>
                        <p><a href="mailto:info@example.com">info@example1.com</a></p>
                    </li>
                    <li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="hedder-up row">
                <div class="col-lg-3 col-md-3 logo-head">
                    <h1><a class="navbar-brand" href="index.html">BURGER SPECIAL</a></h1>
                </div>
                <div class="col-lg-5 col-md-6 search-right">
                    <form action="{{url('/search')}}" class="form-inline my-lg-0" method="get">
                        @csrf
                        <input class="form-control mr-sm-2" name="Search" type="search" placeholder="Search">
                        <button class="btn" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-3 right-side-cart">
                    <div class="cart-icons">
                        <ul>
                            <li>
                                <span class="far fa-heart"></span>
                            </li>
                            <li>
                                <button type="button" data-toggle="modal" data-target="#exampleModal">
                                    <span class="far fa-user"></span>
                                </button>
                            </li>
                            <li class="toyscart toyscart2 cart cart box_1">
                                <form action="{{url('/shop/cart')}}" method="get" class="last">
                                    <button class="w3view-cart" type="submit" name="submit" value="">
                                        <span class="fas fa-cart-arrow-down"></span>
                                        <span id="num-cart">{{ \Cart::getTotalQuantity()}}</span>
                                    </button>
                                </form>
                            </li>
                            @if(isset(Auth::user()->name))
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div id="drop-down-logout" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endif
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#navbarDropdown').on('click',function (e) {
                                        if ($(".dropdown-menu").is(":hidden")) {
                                            $(".dropdown-menu").slideDown();
                                        }else {
                                            $(".dropdown-menu").slideUp();
                                        }
                                    })
                                })
                            </script>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="py-4 d-lg-flex">
                <?php echo $fe_menus_items_header_html?>
            </nav>
        </nav>

    </div>
</div>
<style type="text/css">
    .w3view-cart{
        position: relative;
    }
    #num-cart{
        position: absolute;
        top: -11px;
        right: -12px;
        height: max-content;
        border: none;
        border-radius: 50%;

    }
    .toggle{
        display: inline-block;
    }
</style>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Bạn đã thêm sản phẩm vào giỏ hàng thành công</h4>
            </div>
            <div class="modal-body">
                <p style="text-align: center">
                    <a class="btn btn-success" href="{{url('/shop/cart')}}">Thanh Toán</a>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Tiếp Tục Mua Sắm</button>
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>

    </div>
</div>
<!--//headder-->

