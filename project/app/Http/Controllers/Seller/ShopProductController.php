<?php

namespace App\Http\Controllers\Seller;

use App\Model\Front\ShopCategoryModel;
use App\Model\Seller\ShopProductModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:seller');
    }

    public function index() {
        $items = DB::table('shop_product')->where('name_seller',Auth::user()->name)->paginate(10);

        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();
        $data['products'] = $items;


        return view('seller.content.shop.product.index', $data);
    }

    public function create() {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $cats = ShopCategoryModel::all();
        $data['cats'] = $cats;

        return view('seller.content.shop.product.submit', $data);
    }

    public function edit($id) {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = DB::table('shop_product')->where(array('id'=>$id,'name_seller'=>Auth::user()->name))->get();
        $data['product'] = $item;


        $cats = ShopCategoryModel::all();
        $data['cats'] = $cats;

        return view('seller.content.shop.product.edit', $data);
    }

    public function delete($id) {
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();

        $item = DB::table('shop_product')->where(array('id'=>$id,'name_seller'=>Auth::user()->name))->get();
        $data['product'] = $item;

        return view('seller.content.shop.product.delete', $data);
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'images' => 'required',
            'priceCore' => 'required|numeric',
            'priceSale' => 'required|numeric',
        ]);

        $input = $request->all();

        $item = new ShopProductModel();

        $item->name = $input['name'];
        $item->slug = $input['slug'] ? $this->slugify($input['slug']) : $this->slugify($input['name']);
        $item->images = isset($input['images']) ?json_encode($input['images']): '';
        $item->intro = isset($input['intro'])?$input['intro']:'';
        $item->desc = isset($input['desc'])?$input['desc']:'';
        $item->ship_info = isset($input['ship_info'])?$input['ship_info']:'';
        $item->infomation = isset($input['infomation'])?$input['infomation']:'';
        $item->review = isset($input['review'])?$input['review']:'';
        $item->help = isset($input['help'])?$input['help']:'';
        $item->priceCore = $input['priceCore'];
        $item->priceSale = $input['priceSale'];
        $item->stock = isset($input['stock']) ? (int)$input['stock']:0;
        $item->cat_id = $input['cat_id'];
        $item->homepage =  isset($input['homepage'])?(int)$input['homepage']:0;
        $item->name_seller =  Auth::user()->name;


        $item->save();

        return redirect('/seller/shop/product');
    }

    public function update(Request $request, $id) {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'images' => 'required',
            'priceCore' => 'required|numeric',
            'priceSale' => 'required|numeric',
        ]);

        $input = $request->all();

        $item = ShopProductModel::find($id);

        $item->name = $input['name'];
        $item->slug = $input['slug'] ? $this->slugify($input['slug']) : $this->slugify($input['name']);
        $item->images = isset($input['images']) ?json_encode($input['images']): '';
        $item->intro = isset($input['intro'])?$input['intro']:'';
        $item->desc = isset($input['desc'])?$input['desc']:'';
        $item->ship_info = isset($input['ship_info'])?$input['ship_info']:'';
        $item->infomation = isset($input['infomation'])?$input['infomation']:'';
        $item->review = isset($input['review'])?$input['review']:'';
        $item->help = isset($input['help'])?$input['help']:'';
        $item->priceCore = $input['priceCore'];
        $item->priceSale = $input['priceSale'];
        $item->stock = isset($input['stock']) ? (int)$input['stock']:0;
        $item->cat_id = $input['cat_id'];
        $item->homepage =  isset($input['homepage'])?(int)$input['homepage']:0;
        $item->name_seller =  Auth::user()->name;

        $item->save();

        return redirect('/seller/shop/product');
    }

    public function destroy($id) {
        $item = ShopProductModel::find($id);

        $item->delete();

        return redirect('/seller/shop/product');
    }
    public function slugify($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
}
