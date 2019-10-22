
<h1>Hi, {{ $firstname }}!</h1>
<p>Cảm ơn bạn đã đặt mua sản phẩm của chúng tôi!!</p>
<p>Thông tin sản phẩm bạn đã đặt:</p>

<div class="container">
    <div class="row">
        @foreach($products as $key => $product)
        <?php $images = (isset($product->images) &&$product->images)  ?json_decode($product->images):array();?>
        <div class="col-sm-6">

            <div>Tên Sản Phẩm:{{$product->name}}</div>
            <div>
                @foreach ($images as $image)
                @foreach ($pathToFile as $File)
                    @if($File == asset($image))
                    <img src="<?php echo $message->embed($File)?>" alt="">
                    @endif
                @endforeach
                @endforeach
            </div>
            <div>Đơn Giá:{{number_format($product->priceSale)}} VND</div>


            @foreach($quantity as $qt)
                @if($qt->id == $product->id)
            <div>Đơn Vị:{{$qt->quantity}} Phần</div>
                @endif
            @endforeach
            <div>Thông Tin:<?php echo $product->infomation?></div>
        </div>
            <hr>
        @endforeach
        <div class="container">
            <div>Tổng Tiền :{{number_format($total)}} VND</div>
        </div>
    </div>
</div>
