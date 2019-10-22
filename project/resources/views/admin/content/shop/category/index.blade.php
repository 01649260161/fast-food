@extends('admin.layouts.glance')
@section('title')
    Quản Trị Danh Mục Sản Phẩm
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Danh Mục Sản Phẩm</h1>
    <div style="margin: 20px 0">
        <a href="{{  url('admin/shop/category/create') }}" class="btn btn-success">Thêm Danh Mục</a>
    </div>
    <div class="tables">
        <div class="table table-hover table-dark">
            <h4>Tổng Số:</h4>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Slug</th>
                    <th>Images</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach($cats as $cat)
                    <?php $images =  $cat->images ?json_decode($cat->images):array();?>
                    <tr>
                        <th scope="row">{{$cat->id}}</th>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->slug}}</td>
                        <td>
                            @foreach($images as $image)
                                <img src="{{ asset($image) }}" style="margin-top:15px;max-height:100px;">
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ url('admin/shop/category/'.$cat->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/shop/category/'.$cat->id.'/delete') }}" class="btn btn-danger">Xóa</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $cats->links() }}
        </div>
    </div>
@endsection