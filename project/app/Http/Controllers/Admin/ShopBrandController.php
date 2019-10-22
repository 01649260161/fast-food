<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\ShopBrandModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ShopBrandController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $items = DB::table('shop_brands')->paginate(10);

        /*
         * Đây là biến truyền từ Controller Xuống View
         * */

        $data = array();
        $data['brands']=$items;


        return view('admin.content.shop.brands.index',$data);
    }

    public function create(){
        /*
                 * Đây là biến truyền từ Controller Xuống View
                 * */
        $data = array();


        return view('admin.content.shop.brands.submit',$data);
    }

    public function edit($id){
        $data = array();

        $item = ShopBrandModel::find($id);
        $data['brand']=$item;


        return view('admin.content.shop.brands.edit',$data);
    }
    public function delete($id){
        $data = array();

        $item = ShopBrandModel::find($id);
        $data['brand']=$item;

        return view('admin.content.shop.brands.delete',$data);
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',
            'link' => 'required',
        ]);
        $input = $request->all();

        $item = ShopBrandModel::find($id);

        $item->name = $input['name'];
        $item->image = $input['image'];
        $item->link = $input['link'];
        $item->intro = isset($input['intro'])?$input['intro']:'';
        $item->desc = isset($input['desc'])?$input['desc']:'';


        $item->save();

        return redirect('/admin/shop/brands');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'link' => 'required',
            'image' => 'required',

        ]);
        $input = $request->all();

        $item = new ShopBrandModel();

        $item->name = $input['name'];
        $item->image = $input['image'];
        $item->link = $input['link'];
        $item->intro = isset($input['intro'])?$input['intro']:'';
        $item->desc = isset($input['desc'])?$input['desc']:'';
        $item->save();

        return redirect('/admin/shop/brands');
    }
    public function destroy($id){
        $item = ShopBrandModel::find($id);

        $item->delete();

        return redirect('/admin/shop/brands');
    }
}
