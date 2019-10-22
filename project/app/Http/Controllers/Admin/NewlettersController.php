<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\NewlettersModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;use Illuminate\Support\Facades\DB;

class NewlettersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

        $items = DB::table('newsletters')->paginate(10);

        /*
         * Đây là biến truyền từ Controller Xuống View
         * */

        $data = array();
        $data['newsletters']=$items;



        return view('admin.content.newletters.index',$data);
    }

    public function create(){
        /*
                 * Đây là biến truyền từ Controller Xuống View
                 * */
        $data = array();


        return view('admin.content.newletters.submit',$data);
    }

    public function edit($id){
        $data = array();

        $item = NewlettersModel::find($id);
        $data['newletter']=$item;


        return view('admin.content.newletters.edit',$data);
    }
    public function delete($id){
        $data = array();

        $item = NewlettersModel::find($id);
        $data['newletter']=$item;

        return view('admin.content.newletters.delete',$data);
    }


    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
        ]);
        $input = $request->all();

        $item = NewlettersModel::find($id);

        $item->name = $input['name'];
        $item->email = $input['email'];


        $item->save();

        return redirect('/admin/newletters');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',

        ]);
        $input = $request->all();

        $item = new NewlettersModel();

        $item->name = $input['name'];
        $item->email = $input['email'];
        $item->save();

        return redirect('/admin/newletters');
    }
    public function destroy($id){
        $item = NewlettersModel::find($id);

        $item->delete();

        return redirect('/admin/newletters');
    }
}
