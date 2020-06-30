<?php

namespace App\Http\Controllers;
use Mail;
use App\Model\Front\OrderDetailModel;
use App\Model\Front\OrderModel;
use App\Model\Front\ShopProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array();

        $cartCollection = \Cart::getContent();


        $data['cart_products'] =$cartCollection;

        $products = array();

        foreach ($cartCollection as $p){
            $pid = $p->id;
            $products[$pid] =ShopProductModel::find($pid);
        }

        $data['products'] =$products;
        $data['total_payment'] = \Cart::getTotal();

        return view('frontend.payment.index',$data);
    }
    public function order(Request $request){

        $input = $request->all();

        $validatedData = $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required',
            'customer_note' => 'required',
            'customer_address' => 'required',
            'customer_city' => 'required',
            'customer_country' => 'required',
        ]);

        $cartCollection = \Cart::getContent();


        $order =new OrderModel();


        $cartCollection = \Cart::getContent();
        $products = array();

        foreach ($cartCollection as $p){
            $pid = $p->id;
            $products[$pid] =ShopProductModel::find($pid);
        }

        $data['products'] =$products;

        $cart_id_product = array();
        $pathToFile = array();
        foreach ($cartCollection as $product){
            $cart_id_product[] = $product->id;
        }

        foreach ($cart_id_product as $id_product){
            $pr = ShopProductModel::find($id_product);
            $images = (isset($pr->images) &&$pr->images)  ?json_decode($pr->images):array();
            foreach ($images as $image){
                $pathToFile[]=asset($image);
            }
        }

        // $File = asset('files/1/DRINKS/coke-light.png');
        // Mail::send('frontend.payment.paymentsuccess', array('firstname'=>$input['customer_name'],'products'=>$products,'quantity'=>$cartCollection,'total'=> \Cart::getTotal(),'pathToFile'=>$pathToFile),
        //     function($message) use ($pathToFile){
        //     $message->to(Input::get('customer_email'))->subject('Đặt Hàng Thành Công!');
        //         foreach ($pathToFile as $File){
        //             $message->attach($File);
        //         }
        //     });

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('tranminhhien130398@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });

        die;
        echo "1";


        $order->customer_name = $input['customer_name'];
        $order->customer_phone =  $input['customer_phone'];
        $order->customer_email =  $input['customer_email'];
        $order->customer_note =  $input['customer_note'];
        $order->customer_address =  $input['customer_address'];
        $order->customer_city =  $input['customer_city'];
        $order->customer_country =  $input['customer_country'];
        $order->total_price =  \Cart::getTotal();
        $order->status = 0;
        $order->user_order =  Auth::user()->name;
        $order->save();
        foreach ($cartCollection as $product){
            $order_detail =new OrderDetailModel();

            $order_detail->order_id = $order->id;
            $order_detail->product_id = $product->id;
            $order_detail->quantity = $product->quantity;
            $order_detail->unit_price = $product->price;
            $order_detail->total_price = $product->price *$product->quantity;
            $order_detail->status = 0;


            $order_detail->save();
        }




        \Cart::clear();



        return redirect('shop/payment/after');
    }

    public function afterOrder(){

        return view('frontend.payment.success');
    }
}
