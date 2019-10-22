@extends('admin.layouts.glance')
@section('title')
    Quản Trị Trang
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Trang</h1>
    <div style="margin: 20px 0">
        <a href="{{  url('admin/content/page/create') }}" class="btn btn-success">Thêm Trang</a>
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
                @foreach($pages as $page)
                    <tr>
                        <th scope="row">{{$page->id}}</th>
                        <td>{{$page->name}}</td>
                        <td>{{$page->slug}}</td>
                        <td>
                            <img src="{{ asset($page->images) }}" style="margin-top:15px;max-height:100px;"></td>
                        <td>
                            <a href="{{ url('admin/content/page/'.$page->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/content/page/'.$page->id.'/delete') }}" class="btn btn-danger">Xóa</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $pages->links() }}
        </div>
    </div>



@endsection