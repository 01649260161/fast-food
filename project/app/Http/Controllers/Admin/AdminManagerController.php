<?php

namespace App\Http\Controllers\Admin;

use App\Model\AdminModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminManagerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $items = DB::table('admins')->paginate(10);

        /*
         * Đây là biến truyền từ Controller Xuống View
         * */

        $data = array();
        $data['admins']=$items;


        return view('admin.content.users.index',$data);
    }
    public function create(){
        /*
        * Đây là biến truyền từ Controller Xuống View
        * */
        
        $data = array();


        return view('admin.content.users.submit',$data);
    }
    public function edit($id){
        $data = array();

        $item = AdminModel::find($id);
        $data['admin']=$item;


        return view('admin.content.users.edit',$data);
    }
    public function delete($id){
        $data = array();

        $item = AdminModel::find($id);
        $data['admin']=$item;

        return view('admin.content.users.delete',$data);
    }
    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|max:100',
        ]);
        $input = $request->all();

        $item = AdminModel::find($id);

        $item->name = $input['name'];
        $item->email = $input['email'];
        $item->password = Hash::make($input['password']);
        $item->save();

        return redirect('/admin/users');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|max:100',
        ]);
        $input = $request->all();

        $item = new AdminModel();

        $item->name = $input['name'];
        $item->email = $input['email'];
        $item->password = Hash::make($input['password']);
        $item->save();

        return redirect('/admin/users');
    }
    public function destroy($id){
        $item = AdminModel::find($id);

        $item->delete();

        return redirect('/admin/users');
    }
}
