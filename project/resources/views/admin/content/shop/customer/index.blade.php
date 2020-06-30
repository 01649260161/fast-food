@extends('admin.layouts.glance')
@section('title')
    Quản Trị Khách Hàng
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Khách Hàng</h1>
    <div style="margin: 20px 0">
        <a href="{{  url('admin/shop/customer/create') }}" class="btn btn-success">Thêm khách hàng</a>
    </div>
    <div class="tables">
        <div class="table table-hover table-dark">
            <h4>Tổng Số:</h4>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <th scope="row">{{$customer->id}}</th>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>
                            <a href="{{ url('admin/shop/customer/'.$customer->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/shop/customer/'.$customer->id.'/delete') }}" class="btn btn-danger">Xóa</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $customers->links() }}
        </div>
    </div>


@endsection