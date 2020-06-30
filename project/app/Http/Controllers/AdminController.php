<?php

namespace App\Http\Controllers;

use App\Model\AdminModel;
use App\Model\Admin\ShopOrderModel;
use App\Model\Admin\ShopProductModel;
use App\Model\Admin\NewlettersModel;
use App\Model\Admin\ContentPostModel;
// use App\Model\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin')->only('index');
    }
    //
    //Phương thức trả về view khi đăng nhập admin thành công
    public function index(){

        
        $items = DB::table('orders')->get();
        $items1 = DB::table('shop_product')->get();
        $items2 = DB::table('newsletters')->get();
        $items3 = DB::table('content_post')->get();

        $data = array();
        $data['orders'] = $items;
        $data['products'] = $items1;
        $data['newsletters'] = $items2;
        $data['content_post'] = $items3;

        return view('admin.dashboard',$data);
    }
    //Phương thức trả ve view dùng để đăng kí tài khoản admin
    public function create(){
        //return view('admin.auth.register');
        return view('admin.auth.registertemplate');
    }
    public function store(Request $request){
        //validate dữ liệu được gửi từ form đi
        $this->validate($request,array(
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ));

        //khởi tạo modelđẻ lưu admin mới
        $adminModel = new AdminModel();
        $adminModel->name = $request->name;
        $adminModel->email = $request->email;
        $adminModel->password = bcrypt($request->password);
        $adminModel->save();



        return redirect()->route('admin.auth.login');
    }



}
