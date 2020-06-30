@extends('admin.layouts.glance')
@section('title')
Sửa Đơn Hàng
@endsection
@section('content')
<h1 style="padding-top: 100px">Sửa Đơn Hàng {{$order->id .' : '.$order->name}}</h1>
<div class="row">
    <div class="form-three widget-shadow">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form class="form-horizontal" name="page" action="{{ url('admin/shop/order/'.$order->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Tên Khách Hàng</label>
                <div class="col-sm-8">
                    <input type="text" name="customer_name" class="form-control" id="focusedinput" value="{{$order->customer_name}}" placeholder="Default Input">
                </div>
                <div class="col-sm-2">
                    <p class="help-block">Your help text!</p>
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-8">
                    <input type="text" name="customer_email" class="form-control" id="focusedinput" value="{{$order->customer_email}}" placeholder="Default Input">
                </div>
                <div class="col-sm-2">
                    <p class="help-block">Your help text!</p>
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">SDT</label>
                <div class="col-sm-8">
                    <input type="text" name="customer_phone" class="form-control" id="focusedinput" value="{{$order->customer_phone}}" placeholder="Default Input">
                </div>
                <div class="col-sm-2">
                    <p class="help-block">Your help text!</p>
                </div>
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">address</label>
                <div class="col-sm-8">
                    <input type="text" name="customer_address" class="form-control" id="focusedinput" value="{{$order->customer_address}}" placeholder="Default Input">
                </div>
                <div class="col-sm-2">
                    <p class="help-block">Your help text!</p>
                </div>
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">City</label>
                <div class="col-sm-8">
                    <input type="text" name="customer_city" class="form-control" id="focusedinput" value="{{$order->customer_city}}" placeholder="Default Input">
                </div>
                <div class="col-sm-2">
                    <p class="help-block">Your help text!</p>
                </div>
            </div>


            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Quốc Gia</label>
                <div class="col-sm-8">
                    <input type="text" name="customer_country" class="form-control" id="focusedinput" value="{{$order->customer_country}}" placeholder="Default Input">
                </div>
                <div class="col-sm-2">
                    <p class="help-block">Your help text!</p>
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Tổng Tiền</label>
                <div class="col-sm-8">
                    <input type="text" name="total_price" class="form-control" id="focusedinput" value="{{$order->total_price}}" placeholder="Default Input">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Trạng Thái</label>
                <div class="col-sm-8">
                    <?php if ($order->status == 4 || $order->status == 3 || $order->status == 2) {
                        $check = 'disabled';
                    } else {
                        $check = '';
                    }

                    if ($order->status == 1) {
                        $check1 = 'disabled';
                    } else {
                        $check1 = '';
                    }


                    ?>
                    <select name="status" id="">
                        <?php $selected = ($order->status == 0) ? 'selected' : ''; ?>
                        <option value="0" <?php echo $selected . ' ' . $check1 . ' ' . $check ?>>Chưa Thanh Toán</option>
                        <?php $selected = ($order->status == 1) ? 'selected' : ''; ?>
                        <option value="1" <?php echo $selected . ' ' . $check ?>>Đã Thanh Toán</option>
                        <?php $selected = ($order->status == 2) ? 'selected' : ''; ?>
                        <option value="2" disabled <?php echo $selected ?>>Đang Vận Chuyển</option>
                        <?php $selected = ($order->status == 3) ? 'selected' : ''; ?>
                        <option value="3" disabled <?php echo $selected ?>>Đã Giao Hàng</option>
                        <?php $selected = ($order->status == 4) ? 'selected' : ''; ?>
                        <option value="4" disabled <?php echo $selected ?>>Hủy Đơn</option>
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Ghi Chú</label>
                <div class="col-sm-8"><textarea name="customer_note" id="txtarea1" cols="50" rows="4" class="form-control mytinymce">{{$order->customer_note}}</textarea></div>
            </div>

            <div class="col-sm-offset-2">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection