<?php

namespace App\Http\Controllers\Shipper;

use App\Model\Front\OrderModel;
use App\Model\Shipper\ShopOrderModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class ShopOrderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:shipper');
    }
    public function index(){
        $items = DB::table('orders')->where('shipper_user','')->paginate(10);

        /*
         * Đây là biến truyền từ Controller Xuống View
         * */

        $data = array();
        $data['orders']=$items;


        return view('shipper.content.shop.order.index',$data);
    }
    public function list(){
        $items = DB::table('orders')->where('shipper_user',Auth::user()->name)->paginate(10);

        $data = array();
        $data['orders']=$items;


        return view('shipper.content.shop.order.list',$data);
    }
    public function edit($id){
        $data = array();

        $item = ShopOrderModel::find($id);
        $data['order']=$item;


        return view('shipper.content.shop.order.edit',$data);
    }


    public function update(Request $request,$id){
        $input = $request->all();

        $validatedData = $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required',
            'customer_note' => 'required',
            'customer_address' => 'required',
            'customer_city' => 'required',
            'customer_country' => 'required',
            'total_price' => 'required',
            'status' => 'required',
        ]);

        $item = ShopOrderModel::find($id);

        $item->customer_name = $input['customer_name'];
        $item->customer_phone =  $input['customer_phone'];
        $item->customer_email =  $input['customer_email'];
        $item->customer_note =  $input['customer_note'];
        $item->customer_address =  $input['customer_address'];
        $item->customer_city =  $input['customer_city'];
        $item->customer_country =  $input['customer_country'];
        $item->total_price = $input['total_price'];
        $item->status = $input['status'];

        $item->save();

        return redirect('/shipper/shop/order');
    }

    public function verify($id){
        $item = ShopOrderModel::find($id);
        $item->status = 2;
        $item->shipper_user=Auth::user()->name;
        $item->save();
        return redirect('/shipper/shop/order');
    }

    public function unverify($id){
        $item = ShopOrderModel::find($id);
        $item->status = 1;
        $item->shipper_user='';
        $item->save();

        return redirect('/shipper/shop/order');
    }
    public function success($id){
        Mail::send('frontend.payment.paymentsuccess1',
            function($message){
                $message->to('tranminhhien130398@gmail.com')->subject('Đã Gửi Hàng Thành Công!');
            });
        $item = ShopOrderModel::find($id);
        $item->status = 3;
        $item->save();



        return redirect('/shipper/shop/order');
    }
    public function delete(Request $request,$id){
        $input = $request->all();

        $item = ShopOrderModel::find($id);
        $item->status = 4;
        $item->reason = (isset($input['reason']))?$input['reason']:'';
        $item->save();

        return redirect('/shipper/shop/order');
    }
    public function undelete($id){
        $item = ShopOrderModel::find($id);
        $item->status = 2;
        $item->reason = '';
        $item->save();

        return redirect('/shipper/shop/order');
    }




    public function verify1($id){
        $item = ShopOrderModel::find($id);
        $item->status = 2;
        $item->shipper_user=Auth::user()->name;
        $item->save();

        return redirect('/shipper/shop/order/list');
    }

    public function unverify1($id){
        $item = ShopOrderModel::find($id);
        $item->status = 1;
        $item->shipper_user='';
        $item->save();

        return redirect('/shipper/shop/order/list');
    }
    public function success1($id){

        $emails = DB::table('orders')->where('id',$id)->get();

        $emails_id[] = $emails[0]->customer_email;

        Mail::send('frontend.payment.paymentsuccess1', array('order_id'=>$id), function($message) use ($emails_id)
        {
            $message->to($emails_id)->subject('Đã Gửi Hàng Thành Công!');

        });


        /*if (Mail::send('frontend.payment.paymentsuccess1', array('order_id'=>$id), function($message) use ($emails_id)
        {
            $message->to($emails_id)->subject('Đã Gửi Hàng Thành Công!');
        })){
            $item = ShopOrderModel::find($id);
            $item->status = 2;
            $item->save();
        }*/



        /*if (strtotime(date('Y-m-d H:i:s')) -  strtotime($emails[0]->updated_at) == 10){
            $item = ShopOrderModel::find($id);
            $item->status = 3;
            $item->save();
        }*/


        return redirect('/shipper/shop/order/list');
    }
    public function store($id){
        $item = ShopOrderModel::find($id);
        $item->status = 3;
        $item->save();

        return view('shipper.content.shop.order.verify');

    }

    public function delete1(Request $request,$id){
        $input = $request->all();

        $item = ShopOrderModel::find($id);
        $item->status = 4;
        $item->reason = (isset($input['reason']))?$input['reason']:'';
        $item->save();


        $emails = DB::table('orders')->where('id',$id)->get();



        $emails_id[] = $emails[0]->customer_email;
        Mail::send('frontend.payment.paymentdelete', array('reason'=>$emails[0]->reason), function($message) use ($emails_id)
        {
            $message->to($emails_id)->subject('Đơn Hàng Đã Được Hủy!');
        });

        return redirect('/shipper/shop/order/list');
    }
    public function undelete1($id){
        $item = ShopOrderModel::find($id);
        $item->status = 2;
        $item->reason = '';
        $item->save();

        return redirect('/shipper/shop/order/list');
    }
}
