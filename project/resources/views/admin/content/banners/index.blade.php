@extends('admin.layouts.glance')
@section('title')
    Quản Trị Banners
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Banners</h1>

    <div style="margin: 20px 0">
        <a href="{{  url('admin/banners/create') }}" class="btn btn-success">Thêm Trang</a>
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
                @foreach($banners as $banner)
                    <tr>
                        <th scope="row">{{$banner->id}}</th>
                        <td>{{$banner->name}}</td>
                        <td>{{$banner->link}}</td>
                        <td>
                            <img src="{{ asset($banner->image) }}" style="margin-top:15px;max-height:100px;">
                        </td>
                        <td>
                            <a href="{{ url('admin/banners/'.$banner->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/banners/'.$banner->id.'/delete') }}" class="btn btn-danger">Xóa</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $banners->links() }}
        </div>
    </div>



@endsection