@extends('layouts.homepages.glance')
@section('title')
    {{$post->name}}
@endsection
@section('content')

    <section class="checkout py-lg-4 py-md-3 py-sm-3 py-3" style="margin-top: 250px">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="ads-grid_shop">
                <div class="shop_inner_inf">
                    <div class="privacy about">
                        <h3><span>{{$post->name}}</span></h3>
                        <!--/tabs-->
                        <br>
                        <img src="{{asset($post->images)}}" style="width: 710px;height: 735px" alt="">
                    <?php echo $post->desc?>
                    <!--//tabs-->
                    </div>
                </div>
                <!-- //payment -->
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

@endsection