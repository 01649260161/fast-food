@extends('seller.layouts.glance')
@section('title')
    Quản trị sản phẩm
@endsection
@section('content')
    <h1 style="padding-top: 100px"> Quản trị sản phẩm</h1>
    <div style="margin: 20px 0">
        <a href="{{ url('seller/shop/product/create') }}" class="btn btn-success">Thêm sản phẩm</a>
    </div>
    <div class="tables">
        <div class="table table-hover table-dark">
            <h4>Tổng số : </h4>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Images</th>
                    <th>Giá niêm yết</th>
                    <th>Giá bán</th>
                    <th>Tồn kho</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $product)
                    <?php $images =  $product->images ?json_decode($product->images):array();?>

                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>@foreach($images as $image)
                                <img src="{{ asset($image) }}" style="margin-top:15px;max-height:100px;">
                            @endforeach
                        </td>
                        <td>{{ $product->priceCore }}</td>
                        <td>{{ $product->priceSale }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <a href="{{ url('seller/shop/product/'.$product->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('seller/shop/product/'.$product->id.'/delete ') }}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
@endsection
