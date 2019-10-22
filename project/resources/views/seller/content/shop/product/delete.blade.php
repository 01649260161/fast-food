@extends('seller.layouts.glance')
@section('title')
    Xóa sản phẩm
@endsection
@section('content')

    @if(!empty($product[0]))
    <h1 style="padding-top: 100px"> Xóa sản phẩm {{ $product[0]->id . ' : ' .$product[0]->name }}</h1>

    <div class="row">
        <div class="form-three widget-shadow">
            <form name="product" action="{{ url('seller/shop/product/'.$product[0]->id.'/delete') }}" method="post" class="form-horizontal">
                @csrf

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </div>
            </form>
        </div>
    </div>
    @else
        <h1 style="padding-top: 100px">Bạn Không Có Quyền Truy Cập Vào</h1>
    @endif
@endsection
