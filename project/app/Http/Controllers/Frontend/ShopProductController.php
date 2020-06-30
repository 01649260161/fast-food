<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Admin\ShopProductModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\Model\Admin\ReviewModel;
use Illuminate\Support\Facades\DB;

class ShopProductController extends Controller
{
    //
    public function detail($id){
        $items =ShopProductModel::find($id);
        $reviews = DB::table('reviews')->where("product_id",$id)->get();


        $data = array();
        $data['product'] =$items;
        $data['reviews'] =$reviews;
        return view('frontend.shop.product.detail',$data);
    }
}
