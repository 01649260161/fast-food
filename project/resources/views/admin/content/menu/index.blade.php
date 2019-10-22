@extends('admin.layouts.glance')
@section('title')
    Quản Trị Menu
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Menu</h1>
    <div style="margin: 20px 0">
        <a href="{{  url('admin/menu/create') }}" class="btn btn-success">Thêm Menu</a>
    </div>
    <div class="tables">
        <div class="table table-hover table-dark">
            <h4>Tổng Số:</h4>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Vị Trí</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <th scope="row">{{$menu->id}}</th>
                        <td>{{$menu->name}}</td>
                        <td>
                            @if(isset($locations[$menu->location]))
                            {{$locations[$menu->location] }}
                                @endif
                        </td>
                        <td>
                            <a href="{{ url('admin/menu/'.$menu->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/menu/'.$menu->id.'/delete') }}" class="btn btn-danger">Xóa</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $menus->links() }}
        </div>
    </div>



@endsection