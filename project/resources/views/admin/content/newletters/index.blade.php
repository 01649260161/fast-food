@extends('admin.layouts.glance')
@section('title')
    Quản Trị Newsletters
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Newsletters</h1>

    <div style="margin: 20px 0">
        <a href="{{  url('admin/newletters/create') }}" class="btn btn-success">Thêm Newsletters</a>
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
                @foreach($newsletters as $newletter)
                    <tr>
                        <th scope="row">{{$newletter->id}}</th>
                        <td>{{$newletter->name}}</td>
                        <td>{{$newletter->email}}</td>
                        <td>
                            <a href="{{ url('admin/newletters/'.$newletter->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/newletters/'.$newletter->id.'/delete') }}" class="btn btn-danger">Xóa</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $newsletters->links() }}
        </div>
    </div>


@endsection