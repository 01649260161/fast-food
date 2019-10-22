@extends('layouts.homepages.glance')
@section('title')
    Tag nội dung {{$tag->name}}
@endsection
@section('content')
    <style>
        .col-sm-4 ul li{
            margin: 10px 0;
        }
        .col-sm-4 ul li a{
            color: green;
        }
        .col-sm-4 ul li a:hover{
            color: red;
        }
    </style>
    <div class="container" style="margin-top: 300px">
        <h1 style="text-align: center">Danh Mục Tin Tức</h1>
        <div class="row" style="margin-top: 50px">
            <div  class="col-sm-8">
                @foreach($posts as $post)
                    <div class="container" style="margin: 25px 0;border: 1px solid #ccc;padding: 25px">
                        <div class="row">
                            <div class="col-sm-5">
                                <a href="{{url('content/post/'.$post->id)}}">
                                    <img src="{{asset($post->images)}}" style="width: 250px; height: 250px" alt="">
                                </a>
                            </div>
                            <div class="col-sm-7">
                                <a href="{{url('content/post/'.$post->id)}}"><h3>{{$post->name}} <span style="font-size: 12px;color: goldenrod">{{$post->created_at}}</span></h3></a>

                                <?php echo $post->intro?>
                                <?php echo $post->desc?>

                            </div>
                        </div>
                    </div>
                @endforeach
                {{$posts->links()}}
            </div>
            <div class="col-sm-4" style="margin: 25px 0;border: 1px solid #ccc;padding: 25px">
                <div>
                    <h3 >Danh Sách</h3>
                </div>
                <ul>
                    @foreach($list as $ls)
                        <li><a href="{{url('content/tag/'.$ls->id)}}">{{$ls->name}}</a></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
@endsection