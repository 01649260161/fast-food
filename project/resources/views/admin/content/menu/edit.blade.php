@extends('admin.layouts.glance')
@section('title')
    Sửa Menu
@endsection
@section('content')
    <h1 style="padding-top: 100px">Sửa Menu {{$menu->id .' : '.$menu->name}}</h1>
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
            <form class="form-horizontal" name="menu" action="{{ url('admin/menu/'.$menu->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên Menu</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" id="focusedinput" value="{{$menu->name}}" placeholder="Default Input">
                    </div>
                    <div class="col-sm-2">
                        <p class="help-block">Your help text!</p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" name="slug" class="form-control" id="focusedinput" value="{{$menu->slug}}" placeholder="Default Input">
                    </div>
                    <div class="col-sm-2">
                        <p class="help-block">Your help text!</p>
                    </div>
                </div>

                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Location</label>
                <div class="col-sm-8">
                    <select name="location">
                        <option value="0">Không Hiện</option>
                        @foreach($locations as $key_location => $location)
                            <?php $selected = ($key_location == $menu->location)? 'selected':' ';?>
                            <option value="{{$key_location}}" {{$selected}}>{{$location}}</option>
                        @endforeach
                    </select>
                </div>
        </div>




                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label textarea.mytinymce">Mô Tả Ngắn</label>
                    <div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4"  class="form-control1 mytinymce">{{$menu->desc}}</textarea></div>
                </div>



                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection