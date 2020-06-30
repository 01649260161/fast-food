@extends('admin.layouts.glance')
@section('title')
    Quản Trị Cài Đặt
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Cài Đặt</h1>

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
            <form class="form-horizontal" name="category" action="{{ url('/admin/config') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên Trang Web</label>
                    <div class="col-sm-8">
                        <input type="text" name="web_name" class="form-control" id="focusedinput" value="{{$configs['web_name']}}" placeholder="Default Input">
                    </div>
                    <div class="col-sm-2">
                        <p class="help-block">Your help text!</p>
                    </div>
                </div>



                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Header Logo</label>
                    <div class="col-sm-8">
                <span class="input-group-btn">
                     <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="lfm-btn btn btn-primary">
                       <i class="fa fa-picture-o"></i> Choose
                     </a>

                   </span>
                        <input id="thumbnail1" class="form-control" type="text" name="header_logo" value="{{$configs['header_logo']}}" placeholder="Default Input">
                        <?php if (isset($configs['header_logo']) &&  $configs['header_logo']):?>
                        <img id="holder1" src="{{ asset($configs['header_logo']) }}" style="margin-top:15px;max-height:100px;">
                        <?php endif;?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Footer Logo</label>
                    <div class="col-sm-8">
                <span class="input-group-btn">
                     <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="lfm-btn btn btn-primary">
                       <i class="fa fa-picture-o"></i> Choose
                     </a>
                   </span>
                        <input id="thumbnail2" class="form-control" type="text" name="footer_logo" value="{{$configs['footer_logo']}}" placeholder="Default Input">
                        <?php if (isset($configs['footer_logo']) &&  $configs['footer_logo']):?>
                        <img id="holder2" src="{{ asset($configs['footer_logo']) }}" style="margin-top:15px;max-height:100px;">
                        <?php endif;?>
                    </div>
                </div>


                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Mô Tả Ngắn</label>
                    <div class="col-sm-8"><textarea name="web_intro" id="txtarea1" cols="50" rows="4"  class="form-control1 mytinymce">{{$configs['web_intro']}}</textarea></div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Mô Tả</label>
                    <div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{$configs['desc']}}</textarea></div>
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