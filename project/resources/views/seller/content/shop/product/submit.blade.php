@extends('seller.layouts.glance')
@section('title')
    Thêm mới sản phẩm
@endsection
@section('content')
    <h1 style="padding-top: 100px"> Thêm mới sản phẩm </h1>

    <div class="row">
        <div class="form-three widget-shadow">
            <form name="product" action="{{ url('seller/shop/product') }}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên sản phẩm</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Danh mục</label>
                    <div class="col-sm-8">
                        <select name="cat_id">
                            <option value="0">Không có danh mục</option>
                            @foreach($cats as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" name="slug" class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>


                <?php
                $key = 0;
                ?>
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
                        <input id="thumbnail{{$key}}" class="form-control" type="text" name="images[]" value="" placeholder="Default Input">
                        <img id="holder{{$key}}"  style="margin-top:15px;max-height:100px;">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Thêm</label>
                    <div class="col-sm-8">
                        <a id="plus-image" class="btn btn-success">
                            <i class="fa fa-plus"></i>Thêm ảnh
                        </a>
                    </div>
                </div>


                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Giá niêm yết</label>
                    <div class="col-sm-8">
                        <input type="text" name="priceCore" class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Giá bán</label>
                    <div class="col-sm-8">
                        <input type="text" name="priceSale" class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tồn kho</label>
                    <div class="col-sm-8">
                        <input type="text" name="stock" class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Thông Tin Vận Chuyển</label>
                    <div class="col-sm-8">
                        <input type="text" name="ship_info" class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Mô tả ngắn</label>
                    <div class="col-sm-8">
                        <textarea name="intro" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Mô tả</label>
                    <div class="col-sm-8">
                        <textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Thông Tin Bổ Sung</label>
                    <div class="col-sm-8">
                        <textarea name="infomation" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Đánh Giá</label>
                    <div class="col-sm-8">
                        <textarea name="review" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Trợ Giúp</label>
                    <div class="col-sm-8">
                        <textarea name="help" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce"></textarea>
                    </div>
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

            $('#plus-image').on('click',function (e) {
                e.preventDefault();
                var html = '';
                var lfm_btn_leng = $('.lfm-btn').length;
                var lfm_btn_id_next = lfm_btn_leng+1;

                for (var i = 1;i<1000;i++){
                    if ($('#lfm'+lfm_btn_id_next).length < 1){
                        html +='<div class="form-group">\n' +
                            '                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>\n' +
                            '                    <div class="col-sm-8">\n' +
                            '                        <span class="input-group-btn">\n' +
                            '                             <a id="lfm'+lfm_btn_id_next+'" data-input="thumbnail'+lfm_btn_id_next+'" data-preview="holder'+lfm_btn_id_next+'" class="lfm-btn btn btn-primary">\n' +
                            '                               <i class="fa fa-picture-o"></i> Choose\n' +
                            '                             </a>\n' +
                            '                            <a class="btn btn-warning remove-image">\n' +
                            '                                <i class="fa fa-remove"></i>Xóa\n' +
                            '                            </a>\n' +
                            '                           </span>\n' +
                            '                        <input id="thumbnail'+lfm_btn_id_next+'" class="form-control" type="text" name="images[]" value="" placeholder="Default Input">\n' +
                            '                        <img id="holder'+lfm_btn_id_next+'"  style="margin-top:15px;max-height:100px;">\n' +
                            '                    </div>\n' +
                            '                    </div>';
                        break;
                    }
                    lfm_btn_id_next++;
                }
                var box =$(this).closest('.form-group');
                $(html).insertBefore(box);

                var domain = "http://localhost/project_foods/project/public/laravel-filemanager";
                $('.lfm-btn').filemanager('image', {prefix: domain});
            });
            $(document).on('click','.remove-image',function (e) {
                e.preventDefault();
                $(this).closest('.form-group').remove();
            })
        })
    </script>

@endsection
