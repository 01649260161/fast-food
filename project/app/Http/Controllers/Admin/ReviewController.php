<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Admin\ReviewModel;

class ReviewController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $items = DB::table('reviews')->paginate(10);
        $data = array();
        $data['reviews']=$items;


        return view('admin.content.shop.review.index',$data);
    }
    public function view($id){
        $data = array();

        $item = ReviewModel::find($id);
        $data['review']=$item;


        return view('admin.content.shop.review.view',$data);
    }
}
