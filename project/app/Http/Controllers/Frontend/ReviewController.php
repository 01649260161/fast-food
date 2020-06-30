<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Front\ReviewModel;
use Illuminate\Support\Facades\DB;


class ReviewController extends Controller
{
    //
    public function create(Request $request,$id){

        
        $input = $request->all();

        $item = new ReviewModel();

        

        $item->name = $input['name'];
        $item->email = $input['email'];
        $item->content = $input['content'];
        $item->product_id = $id;
        $item->star = 0;
        $item->save();

        return redirect('/shop/product/'.$id);
    }
}
