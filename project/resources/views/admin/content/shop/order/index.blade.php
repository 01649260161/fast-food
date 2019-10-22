@extends('admin.layouts.glance')
@section('title')
    Quản Trị Đặt Hàng
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Đặt Hàng</h1>


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
                    <th>Tài Khoản Đặt Hàng</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <th scope="row">{{$order->id}}</th>
                        <td>{{$order->customer_name}}</td>
                        <td>{{$order->customer_phone}}</td>
                        <td>{{$order->customer_email}}</td>
                        <td>{{number_format($order->total_price)}}</td>
                        <td>{{$order->user_order}}</td>
                        <td>
                            <a href="{{ url('admin/shop/order/'.$order->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/shop/order/'.$order->id.'/delete') }}" class="btn btn-danger">Xóa</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $orders->links() }}
        </div>
    </div>


@endsection