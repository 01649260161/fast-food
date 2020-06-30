@extends('admin.layouts.glance')
@section('title')
Xem chi tiết đánh giá
@endsection
@section('content')
<h1 style="padding-top: 100px">Xem chi tiết đánh giá {{$review->id .' : '.$review->name}}</h1>
<div class="row">
    <div class="form-three widget-shadow">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

            @csrf
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Tên Khách Hàng</label>
                <div class="col-sm-8">
                    <input type="text" name="name" class="form-control" id="focusedinput" value="{{$review->name}}" placeholder="Default Input">
                </div>
                <div class="col-sm-2">
                    <p class="help-block">Your help text!</p>
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-8">
                    <input type="text" name="email" class="form-control" id="focusedinput" value="{{$review->email}}" placeholder="Default Input">
                </div>
                <div class="col-sm-2">
                    <p class="help-block">Your help text!</p>
                </div>
            </div>


            <div class="form-group">
                <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Nội dung</label>
                <div class="col-sm-8"><textarea name="content" id="txtarea1" cols="50" rows="4" class="form-control mytinymce">{{$review->content}}</textarea></div>
            </div>


    </div>
</div>

@endsection