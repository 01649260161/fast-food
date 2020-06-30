<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\ShipperModel;
use Illuminate\Support\Facades\Hash;


class ShipperManagerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $items = DB::table('shippers')->paginate(10);

        /*
         * Đây là biến truyền từ Controller Xuống View
         * */

        $data = array();
        $data['shippers']=$items;


        return view('admin.content.shop.shipper.index',$data);
    }
    public function create(){
        /*
                 * Đây là biến truyền từ Controller Xuống View
                 * */
        $data = array();


        return view('admin.content.shop.shipper.submit',$data);
    }

    public function edit($id){
        $data = array();

        $item = ShipperModel::find($id);
        $data['shipper']=$item;


        return view('admin.content.shop.shipper.edit',$data);
    }
    public function delete($id){
        $data = array();

        $item = ShipperModel::find($id);
        $data['shipper']=$item;

        return view('admin.content.shop.shipper.delete',$data);
    }
    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|max:100',
        ]);
        $input = $request->all();

        $item = ShipperModel::find($id);

        $item->name = $input['name'];
        $item->email = $input['email'];
        $item->password = Hash::make($input['password']);
        $item->save();

        return redirect('/admin/shop/shipper');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|max:100',
        ]);
        $input = $request->all();

        $item = new ShipperModel();

        $item->name = $input['name'];
        $item->email = $input['email'];
        $item->password = Hash::make($input['password']);
        $item->save();

        return redirect('/admin/shop/shipper');
    }
    public function destroy($id){
        $item = ShipperModel::find($id);

        $item->delete();

        return redirect('/admin/shop/shipper');
    }
}
