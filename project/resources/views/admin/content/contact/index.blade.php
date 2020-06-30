@extends('admin.layouts.glance')
@section('title')
    Quản Trị Liên Hệ
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Liên Hệ</h1>

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
            <form class="form-horizontal" name="category" action="{{ url('/admin/contact') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="text" name="email" class="form-control" id="focusedinput" value="{{$configs['email']}}" placeholder="Default Input">
                    </div>
                    <div class="col-sm-2">
                        <p class="help-block">Your help text!</p>
                    </div>
                </div>


                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-8">
                        <input type="text" name="phone" class="form-control" id="focusedinput" value="{{$configs['phone']}}" placeholder="Default Input">
                    </div>
                    <div class="col-sm-2">
                        <p class="help-block">Your help text!</p>
                    </div>
                </div>
                



                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Địa chỉ</label>
                    <div class="col-sm-8"><textarea name="address" id="txtarea1" cols="50" rows="4"  class="form-control1 mytinymce">{{$configs['address']}}</textarea></div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Mô Tả</label>
                    <div class="col-sm-8"><textarea name="web_intro" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{$configs['web_intro']}}</textarea></div>
                </div>

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Lưu</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            var domain = "http://project-foods.local/laravel-filemanager";
            $('.lfm-btn').filemanager('image', {prefix: domain});
        })
    </script>


@endsection