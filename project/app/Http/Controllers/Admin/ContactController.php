<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\ContactModel;

class ContactController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $items = ContactModel::all();

        $config =array();
        $config[] ='email';
        $config[] ='phone';
        $config[] ='address';
        $config[] ='web_intro';

        $default =array();

        //Tạo Mặc định cho mảng config
        foreach ($config as $item_config){

            if (!isset($items[$item_config])){
                $default[$item_config] = '';
            }


        }

        //Lấy từ CSDL ra đè lại mảng $default

        foreach ($items as $item){

            $key =$item->name;
            $default[$key]=$item->value;


        }

        $data = array();
        $data['configs']=$default;



        return view('admin.content.contact.index',$data);
    }

    public function store(Request $request){

        $input = $request->all();

        $config =array();
        $config[] ='email';
        $config[] ='phone';
        $config[] ='address';
        $config[] ='web_intro';


        foreach ($config as $item_config){
            $record =  ContactModel::where('name',$item_config)->first();


            if (isset($record->id)){
                $item = ContactModel::find($record->id);
                $item->value = isset($input[$item_config])? $input[$item_config]:'';
                $item->default='';
                $item->save();
            }else{
                $item = new ContactModel();
                $item->name = $item_config;
                $item->value = isset($input[$item_config])? $input[$item_config]:'';
                $item->default='';
                $item->save();
            }
        }




        return redirect('/admin/contact');
    }
}
