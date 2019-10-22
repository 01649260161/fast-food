<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Admin\ShopProductModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopProductController extends Controller
{
    //
    public function detail($id){
        $items =ShopProductModel::find($id);

        $data = array();
        $data['product'] =$items;
        return view('frontend.shop.product.detail',$data);
    }
}
