@extends('admin.layouts.glance')
@section('title')
    Quản Trị Media
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Media</h1>
    <div style="margin-top: 30px">
        @csrf
        <iframe src="http://localhost/project_foods/project/public/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
    </div>


@endsection