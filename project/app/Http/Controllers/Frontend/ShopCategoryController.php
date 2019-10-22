<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Front\ShopCategoryModel;
use App\Model\Admin\ShopProductModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopCategoryController extends Controller
{
    //

    public function detail($id){

        $item = ShopCategoryModel::find($id);
        $data =array();
        $data['category']=$item;
        $data['products']=ShopCategoryModel::getProducts($id);

        $data['list'] = ShopCategoryModel::all();

        return view('frontend.shop.category.detail',$data);
    }
}
