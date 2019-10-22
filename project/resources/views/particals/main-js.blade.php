<!--js working-->
<script src='{{asset('shop_assets/js/jquery-2.2.3.min.js')}}'></script>
<!--//js working-->
<!-- cart-js -->
{{--<script src="{{asset('shop_assets/js/minicart.js')}}"></script>
<script>
    toys.render();

    toys.cart.on('toys_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>--}}
<!-- //cart-js -->
<!-- price range (top products) -->
{{--<script src="{{asset('shop_assets/js/jquery-ui.js')}}"></script>
<script>
    //<![CDATA[
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

    }); //]]>
</script>--}}
<!-- //price range (top products) -->

<!-- start-smoth-scrolling -->
<script src="{{asset('shop_assets/js/move-top.js')}}"></script>
<script src="{{asset('shop_assets/js/easing.js')}}"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function () {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };


        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<!--bootstrap working-->
<script src="{{asset('shop_assets/js/bootstrap.min.js')}}"></script>
<script src='{{asset('shop_assets/js/jquery-2.2.3.min.js')}}'></script>
<!--//js working-->
<!-- easy-responsive-tabs -->
<script src="{{asset('shop_assets/js/easy-responsive-tabs.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!-- credit-card -->
<script src="{{asset('shop_assets/js/creditly.js')}}"></script>
<link rel="stylesheet" href="{{asset('shop_assets/css/creditly.css')}}" type="text/css" media="all" />
<script>
    $(function () {
        var creditly = Creditly.initialize(
            '.creditly-wrapper .expiration-month-and-year',
            '.creditly-wrapper .credit-card-number',
            '.creditly-wrapper .security-code',
            '.creditly-wrapper .card-type');

        $(".creditly-card-form .submit").click(function (e) {
            e.preventDefault();
            var output = creditly.validate();
            if (output) {
                // Your validated credit card output
                console.log(output);
            }
        });
    });
</script>
<!-- //credit-card -->
<!-- start-smoth-scrolling -->
<script src="{{asset('shop_assets/js/move-top.js')}}"></script>
<script src="{{asset('shop_assets/js/easing.js')}}"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function () {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<!--bootstrap working-->
<script src="{{asset('shop_assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var add_cart_url ='<?php echo url('shop/cart/add')?>';
        $('.ptoys-cart').on('click',function (e) {
            e.preventDefault();
            var dataPost = $(this).closest('form').serializeArray();
            /*
            * Post den controller*/
            $.ajax(
                {
                    url:add_cart_url,
                    dataType:'json',
                    Type:'POST',
                    data:dataPost,
                    success:function (result) {
                        //bung popup
                        $('#myModal').modal('show');
                }});

        });

        $('.flexslider1').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    })
</script>

