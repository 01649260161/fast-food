@extends('admin.layouts.glance')
@section('title')
    Quản Trị Nhãn Hiệu
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Nhãn Hiệu</h1>


    <div style="margin: 20px 0">
        <a href="{{  url('admin/shop/brands/create') }}" class="btn btn-success">Thêm brands</a>
    </div>
    <div class="tables">
        <div class="table table-hover table-dark">
            <h4>Tổng Số:</h4>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Link</th>
                    <th>Image</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach($brands as $brand)
                    <tr>
                        <th scope="row">{{$brand->id}}</th>
                        <td>{{$brand->name}}</td>
                        <td>{{$brand->link}}</td>
                        <td><img src="{{ asset($brand->image) }}" style="margin-top:15px;max-height:100px;"></td>
                        <td>
                            <a href="{{ url('admin/shop/brands/'.$brand->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/shop/brands/'.$brand->id.'/delete') }}" class="btn btn-danger">Xóa</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $brands->links() }}
        </div>
    </div>


@endsection