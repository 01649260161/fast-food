<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\UserModel;
use Illuminate\Support\Facades\Hash;


class CustomerManagerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $items = DB::table('users')->paginate(10);

        /*
         * Đây là biến truyền từ Controller Xuống View
         * */

        $data = array();
        $data['customers']=$items;


        return view('admin.content.shop.customer.index',$data);
    }
    public function create(){
        /*
                 * Đây là biến truyền từ Controller Xuống View
                 * */
        $data = array();


        return view('admin.content.shop.customer.submit',$data);
    }
    public function edit($id){
        $data = array();

        $item = UserModel::find($id);
        $data['customer']=$item;


        return view('admin.content.shop.customer.edit',$data);
    }
    public function delete($id){
        $data = array();

        $item = UserModel::find($id);
        $data['customer']=$item;

        return view('admin.content.shop.customer.delete',$data);
    }
    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|max:100',
        ]);
        $input = $request->all();

        $item = UserModel::find($id);

        $item->name = $input['name'];
        $item->email = $input['email'];
        $item->password = Hash::make($input['password']);
        $item->save();

        return redirect('/admin/shop/customer');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|max:100',
        ]);
        $input = $request->all();

        $item = new UserModel();

        $item->name = $input['name'];
        $item->email = $input['email'];
        $item->password = Hash::make($input['password']);
        $item->save();

        return redirect('/admin/shop/customer');
    }
    public function destroy($id){
        $item = UserModel::find($id);

        $item->delete();

        return redirect('/admin/shop/customer');
    }
}
