@extends('layouts.homepages.glance')
@section('title')
    Trang {{$page->name}}
@endsection
@section('content')

    <section class="checkout py-lg-4 py-md-3 py-sm-3 py-3" style="margin-top: 250px">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="ads-grid_shop">
                <div class="shop_inner_inf">
                    <div class="privacy about">
                        <h3><span>{{$page->name}}</span></h3>
                        <!--/tabs-->
                        <br>
                        <?php echo $page->desc?>
                        <!--//tabs-->
                    </div>
                </div>
                <!-- //payment -->
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

@endsection