@extends('admin.layouts.glance')
@section('title')
    Sửa Danh Mục
@endsection
@section('content')
    <h1 style="padding-top: 100px">Sửa Danh Mục {{$cat->id .' : '.$cat->name}}</h1>
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
            <form class="form-horizontal" name="category" action="{{ url('admin/shop/category/'.$cat->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên Danh Mục</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" id="focusedinput" value="{{$cat->name}}" placeholder="Default Input">
                    </div>
                    <div class="col-sm-2">
                        <p class="help-block">Your help text!</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" name="slug" class="form-control" id="focusedinput" value="{{$cat->slug}}" placeholder="Default Input">
                    </div>
                    <div class="col-sm-2">
                        <p class="help-block">Your help text!</p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Homepage</label>
                    <div class="col-sm-8">
                        <select name="homepage" id="">
                            <?php $selected =  ($cat->homepage == 0 ) ? 'selected' : ''?>
                            <option value="0" <?php echo $selected?>>Không</option>
                            <?php $selected =  ($cat->homepage == 1 ) ? 'selected' : ''?>
                            <option value="1" <?php echo $selected?>>Có</option>
                        </select>
                    </div>
                </div>
                <?php
                $images =  $cat->images ?json_decode($cat->images):array();
                ?>
                @if(!empty($images))
                    @foreach($images as $key =>$image)


                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Images</label>
                            <div class="col-sm-8">
                        <span class="input-group-btn">
                             <a id="lfm{{$key}}" data-input="thumbnail{{$key}}" data-preview="holder{{$key}}" class="lfm-btn btn btn-primary">
                               <i class="fa fa-picture-o"></i> Choose
                             </a>
                            <a class="btn btn-warning remove-image">
                                <i class="fa fa-remove"></i>Xóa
                            </a>
                           </span>
                                <input id="thumbnail{{$key}}" class="form-control" type="text" name="images[]" value="{{ $image }}" placeholder="Default Input">
                                <img id="holder{{$key}}" src="{{ asset($image) }}" style="margin-top:15px;max-height:100px;">
                            </div>
                        </div>

                    @endforeach
                @endif

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Mô Tả Ngắn</label>
                    <div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4"  class="form-control1 mytinymce">{{$cat->intro}}</textarea></div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Mô Tả</label>
                    <div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{$cat->desc}}</textarea></div>
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

            var domain = "http://project-foods.local/laravel-filemanager";
            $('.lfm-btn').filemanager('image', {prefix: domain});
        })
    </script>
@endsection