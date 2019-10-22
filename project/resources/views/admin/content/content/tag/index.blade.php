@extends('admin.layouts.glance')
@section('title')
    Quản Trị Tag
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Tag</h1>
    <div style="margin: 20px 0">
        <a href="{{  url('admin/content/tag/create') }}" class="btn btn-success">Thêm Tag</a>
    </div>
    <div class="tables">
        <div class="table table-hover table-dark">
            <h4>Tổng Số:</h4>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Tác Giả</th>
                    <th>View</th>
                    <th>Images</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <th scope="row">{{$tag->id}}</th>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->author_id}}</td>
                        <td>{{$tag->view}}</td>
                        <td>
                            <img src="{{ asset($tag->images) }}" style="margin-top:15px;max-height:100px;"></td>
                        <td>
                            <a href="{{ url('admin/content/tag/'.$tag->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/content/tag/'.$tag->id.'/delete') }}" class="btn btn-danger">Xóa</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $tags->links() }}
        </div>
    </div>



@endsection