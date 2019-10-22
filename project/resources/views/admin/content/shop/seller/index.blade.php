@extends('admin.layouts.glance')
@section('title')
    Quản Trị Nhà Cung Cấp
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Nhà Cung Cấp</h1>
    <div style="margin: 20px 0">
        <a href="{{  url('admin/shop/seller/create') }}" class="btn btn-success">Thêm Admin</a>
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
                @foreach($sellers as $seller)
                    <tr>
                        <th scope="row">{{$seller->id}}</th>
                        <td>{{$seller->name}}</td>
                        <td>{{$seller->email}}</td>
                        <td>
                            <a href="{{ url('admin/seller/'.$seller->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/seller/'.$seller->id.'/delete') }}" class="btn btn-danger">Xóa</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $sellers->links() }}
        </div>
    </div>


@endsection