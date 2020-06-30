@extends('admin.layouts.glance')
@section('title')
    Quản Trị Đánh Giá
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Đánh Giá</h1>

    <div class="tables">
        <div class="table table-hover table-dark">
            <h4>Tổng Số:</h4>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Content</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                    <tr>
                        <th scope="row">{{$review->id}}</th>
                        <td>{{$review->name}}</td>
                        <td>{{$review->email}}</td>
                        <td>{{$review->content}}</td>
                        <td>
                            <a href="{{ url('admin/shop/review/'.$review->id.'/view') }}" class="btn btn-info">View</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $reviews->links() }}
        </div>
    </div>

@endsection