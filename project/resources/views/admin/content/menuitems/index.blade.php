@extends('admin.layouts.glance')
@section('title')
    Quản Trị MenuItem
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị MenuItem</h1>
    <div style="margin: 20px 0">
        <a href="{{  url('admin/menuitems/create') }}" class="btn btn-success">Thêm MenuItem</a>
    </div>
    <div class="tables">
        <div class="table table-hover table-dark">
            <h4>Tổng Số:</h4>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Parent</th>
                    <th>Menu</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach($menuitems as $menuitem)
                    <tr>
                        <th scope="row">{{$menuitem['id']}}</th>
                        <td>{{$menuitem['name']}}</td>
                        <td>{{$menuitem['parent_id']}}</td>
                        <td>{{$menuitem['menu_id']}}</td>
                        <td>
                            <a href="{{ url('admin/menuitems/'.$menuitem['id'].'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/menuitems/'.$menuitem['id'].'/delete') }}" class="btn btn-danger">Xóa</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>


@endsection