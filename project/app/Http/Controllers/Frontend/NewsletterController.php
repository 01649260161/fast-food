<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Front\NewsletterModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    //
    public function index(){
        $data = array();

        return view('frontend.newsletter.index',$data);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',

        ]);
        $input = $request->all();

        $item = new NewsletterModel();

        $item->name = $input['name'];
        $item->email = $input['email'];
        $item->save();

        return redirect('/newsletter');
    }
}
