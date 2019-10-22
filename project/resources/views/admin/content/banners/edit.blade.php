@extends('admin.layouts.glance')
@section('title')
    Sửa Trang
@endsection
@section('content')
    <h1 style="padding-top: 100px">Sửa Trang {{$banner->id .' : '.$banner->name}}</h1>
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
            <form class="form-horizontal" name="page" action="{{ url('admin/banners/'.$banner->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên </label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control1" id="focusedinput" value="{{$banner->name}}" placeholder="Default Input">
                    </div>
                    <div class="col-sm-2">
                        <p class="help-block">Your help text!</p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Link</label>
                    <div class="col-sm-8">
                        <input type="text" name="link" class="form-control1" value ="{{$banner->link}}" id="focusedinput" placeholder="Default Input">
                    </div>
                    <div class="col-sm-2">
                        <p class="help-block">Your help text!</p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Vị Trí</label>
                    <div class="col-sm-8">
                        <select name="location_id" id="">
                            <option value="0">Không Hiện</option>
                            @foreach($locations as $key => $location)
                                <?php $selected= ($banner->location_id == $key) ?'selected':'';?>
                                <option value="{{$key}}" {{$selected}}>{{$location}}</option>

                            @endforeach
                        </select>
                    </div>

                </div>


                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-8">
                        <span class="input-group-btn">
                             <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="lfm-btn btn btn-primary">
                               <i class="fa fa-picture-o"></i> Choose
                             </a>
                           </span>
                        <input id="thumbnail1" class="form-control" type="text" name="image" value="{{$banner->image}}" placeholder="Default Input">
                        @if(isset($banner->image) && $banner->image)
                        <img id="holder1" src="{{asset($banner->image)}}"  style="margin-top:15px;max-height:100px;">
                            @endif
                    </div>
                </div>




                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Mô Tả Ngắn</label>
                    <div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4"  class="form-control1 mytinymce">{{$banner->intro}}</textarea></div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Mô Tả</label>
                    <div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4"  class="form-control1 mytinymce">{{$banner->desc}}</textarea></div>
                </div>

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            var domain = "http://localhost/project_foods/project/public/laravel-filemanager";
            $('.lfm-btn').filemanager('image', {prefix: domain});
        })
    </script>
@endsection