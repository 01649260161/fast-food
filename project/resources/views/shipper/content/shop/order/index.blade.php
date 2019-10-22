@extends('shipper.layouts.glance')
@section('title')
    Tất Cả Đơn Hàng
@endsection
@section('content')
    <h1 style="padding-top: 100px">Tất Cả Đơn Hàng</h1>


    <div class="tables">
        <div class="table table-hover table-dark">
            <h4>Tổng Số:</h4>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>SDT</th>
                    <th>Email</th>
                    <th>Tổng Tiền</th>
                    <th>Nhận Đơn Hàng</th>
                    <th>Đã Giao Hàng</th>
                    <th>Hủy Đơn</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach($orders as $key => $order)

                    @if($order->status == 4)
                    <tr>
                        <th scope="row"><del>{{$order->id}}</del></th>
                        <td><del>{{$order->customer_name}}</del></td>
                        <td><del>{{$order->customer_phone}}</del></td>
                        <td><del>{{$order->customer_email}}</del></td>
                        <td><del>{{number_format($order->total_price)}} VND</del></td>
                        <td style="text-align: center">
                            <?php $check_order = '';
                                  $check_success = '';
                                switch ($order->status){
                                    case 0:
                                        $check_order = 'disabled';
                                        $check_success ='disabled';
                                        $check_delete='disabled';
                                        break;
                                    case 1:
                                        $check_order = '';
                                        $check_success ='disabled';
                                        $check_delete='disabled';
                                        break;
                                    case 2:
                                        $check_order = '';
                                        $check_success ='';
                                        $check_delete='';
                                        break;
                                    case 3:
                                        $check_order = 'disabled';
                                        $check_success ='disabled';
                                        $check_delete='disabled';
                                        break;
                                    case 4:
                                        $check_order = 'disabled';
                                        $check_success ='disabled';
                                        if (strtotime(date('Y-m-d H:i:s')) - strtotime($order->updated_at)>600){
                                            $check_delete = 'disabled';
                                        }else{
                                            $check_delete = '';
                                        }

                                        break;

                                    default:
                                }
                            ?>
                            <?php
                                $check1 ='';
                            if ($order->status ==2 || $order->status==3 ){
                                $check1 ='checked';
                            }else{
                                $check1 ='';
                            }?>
                            <input type="checkbox" id="check{{$key}}"  <?php echo $check_order . ' ' .$check1;?>>
                            <form id="check-order{{$key}}" action="{{url('shipper/shop/order/'.$order->id.'/verify')}}" method="POST">
                                @csrf
                            </form>
                            <form id="un-check-order{{$key}}" action="{{url('shipper/shop/order/'.$order->id.'/unverify')}}" method="POST">
                                @csrf
                            </form>
                        </td>
                        <td style="text-align: center">
                            <?php
                            $check2 ='';
                            if ($order->status ==3){
                                $check2 ='checked';
                            }else{
                                $check2 ='';
                            }?>
                            <input type="checkbox" id="check-success{{$key}}" <?php echo $check_success . ' ' .$check2;?>>
                            <form id="check-order-success{{$key}}" action="{{url('shipper/shop/order/'.$order->id.'/success')}}" method="POST">
                                @csrf
                            </form>
                        </td>
                        <td style="text-align: center">
                            <?php
                            $check3 ='';
                            if ($order->status ==4){
                                $check3 ='checked';
                            }else{
                                $check3 ='';
                            }?>
                            <input type="checkbox" id="check-delete{{$key}}" <?php echo $check_delete .' '.$check3;?>>
                            <form id="un-check-order-delete{{$key}}" action="{{url('shipper/shop/order/'.$order->id.'/undelete')}}" method="POST">
                                @csrf
                            </form>
                        </td>

                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#check{{$key}}').change(function (e) {
                                    if ($('#check{{$key}}').is(':checked')){
                                        $('#check-order{{$key}}').submit();
                                    }else{
                                        $('#un-check-order{{$key}}').submit();
                                    }
                                });

                                if ($('#check{{$key}}').is(':checked')){

                                }else {
                                    $('#check-success{{$key}}').attr("disabled",true);
                                }

                                $('#check-success{{$key}}').change(function (e) {
                                    $('#check-order-success{{$key}}').submit();
                                });


                                if ($('#check-delete{{$key}}').is(':checked')){
                                    $('#check-success{{$key}}').attr("disabled",true);
                                    $('#check{{$key}}').attr("disabled",true);
                                }

                                $('#check-delete{{$key}}').change(function (e) {
                                    if ($('#check{{$key}}').is(':checked')){
                                        $('#check-order-delete{{$key}}').submit();

                                    }else {
                                        $('#un-check-order-delete{{$key}}').submit();
                                    }
                                });

                                AutoRefresh(600000);

                                function AutoRefresh( t ) {
                                    setTimeout("location.reload(true);", t);
                                }
                            })
                        </script>
                        <td>
                            <a href="{{ url('shipper/shop/order/'.$order->id.'/edit') }}" class="btn btn-info">View</a>
                        </td>
                    </tr>
                        @else
                        <tr>
                            <th scope="row">{{$order->id}}</th>
                            <td>{{$order->customer_name}}</td>
                            <td>{{$order->customer_phone}}</td>
                            <td>{{$order->customer_email}}</td>
                            <td>{{number_format($order->total_price)}} VND</td>
                            <td style="text-align: center">
                                <?php $check_order = '';
                                $check_success = '';
                                switch ($order->status){
                                    case 0:
                                        $check_order = 'disabled';
                                        $check_success ='disabled';
                                        $check_delete='disabled';
                                        break;
                                    case 1:
                                        $check_order = '';
                                        $check_success ='disabled';
                                        $check_delete='disabled';
                                        break;
                                    case 2:
                                        $check_order = '';
                                        $check_success ='';
                                        $check_delete='';
                                        break;
                                    case 3:
                                        $check_order = 'disabled';
                                        $check_success ='disabled';
                                        $check_delete='disabled';
                                        break;
                                    case 4:
                                        $check_order = 'disabled';
                                        $check_success ='disabled';
                                        $check_delete = 'disabled';
                                        break;

                                    default:
                                }
                                ?>
                                <?php
                                $check1 ='';
                                if ($order->status ==2 || $order->status==3 ){
                                    $check1 ='checked';
                                }else{
                                    $check1 ='';
                                }?>
                                <input type="checkbox" id="check{{$key}}"  <?php echo $check_order . ' ' .$check1;?>>
                                <form id="check-order{{$key}}" action="{{url('shipper/shop/order/'.$order->id.'/verify')}}" method="POST">
                                    @csrf
                                </form>
                                <form id="un-check-order{{$key}}" action="{{url('shipper/shop/order/'.$order->id.'/unverify')}}" method="POST">
                                    @csrf
                                </form>
                            </td>
                            <td style="text-align: center">
                                <?php
                                $check2 ='';
                                if ($order->status ==3){
                                    $check2 ='checked';
                                }else{
                                    $check2 ='';
                                }?>
                                <input type="checkbox" id="check-success{{$key}}" <?php echo $check_success . ' ' .$check2;?>>
                                <form id="check-order-success{{$key}}" action="{{url('shipper/shop/order/'.$order->id.'/success')}}" method="POST">
                                    @csrf
                                </form>
                            </td>
                            <td style="text-align: center">
                                <?php
                                $check3 ='';
                                if ($order->status ==4){
                                    $check3 ='checked';
                                }else{
                                    $check3 ='';
                                }?>
                                <input type="checkbox" id="check-delete{{$key}}" <?php echo $check_delete .' '.$check3;?> data-toggle="modal" data-target="#myModal{{$key}}">
                            </td>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#check{{$key}}').change(function (e) {
                                        if ($('#check{{$key}}').is(':checked')){
                                            $('#check-order{{$key}}').submit();
                                        }else{
                                            $('#un-check-order{{$key}}').submit();
                                        }
                                    });

                                    if ($('#check{{$key}}').is(':checked')){

                                    }else {
                                        $('#check-success{{$key}}').attr("disabled",true);
                                    }

                                    $('#check-success{{$key}}').change(function (e) {
                                        $('#check-order-success{{$key}}').submit();
                                    });


                                    if ($('#check-delete{{$key}}').is(':checked')){
                                        $('#check-success{{$key}}').attr("disabled",true);
                                        $('#check{{$key}}').attr("disabled",true);
                                    }

                                    $('#close1{{$key}}').click(function () {
                                        location.reload();
                                    })
                                    $('#close2{{$key}}').click(function () {
                                        location.reload();
                                    })

                                    AutoRefresh(600000);

                                    function AutoRefresh( t ) {
                                        setTimeout("location.reload(true);", t);
                                    }
                                })
                            </script>
                            <td>
                                <a href="{{ url('shipper/shop/order/'.$order->id.'/edit') }}" class="btn btn-info">View</a>
                            </td>
                        </tr>
                    @endif
                    <div id="myModal{{$key}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button id="close1{{$key}}" type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Lý Do</h4>
                                </div>
                                <div class="modal-body">
                                    <form id="check-order-delete{{$key}}" action="{{url('shipper/shop/order/'.$order->id.'/delete')}}" method="POST">
                                        @csrf
                                        <input name="reason" style="width: 100%" type="text">
                                        <input style="width: 100px" type="submit" class="btn btn-send">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button id="close2{{$key}}" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </tbody>
            </table>
            {{ $orders->links() }}
        </div>
    </div>




@endsection