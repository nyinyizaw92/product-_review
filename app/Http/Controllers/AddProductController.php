<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductReview;

class AddProductController extends Controller
{
    public function index(){
        return view('partials.addproduct');
    }



    public function show($id){
       $show_pd = ProductReview::find($id);
       return view('partials.detail',compact('show_pd'));
    }


    public function store(Request $request){
        $pd_list = new ProductReview();
        $pd_list->product_name= $request['pd_name'];
        $pd_list->review= $request['pd_review'];
        $pd_list->votes = 0;
    
         $pd_list->save();
         return redirect('/');
    }  
    
    public function update(Request $request,$id){
        $update_pd = ProductReview::find($id);
        $update_pd->product_name= $request['pd_name'];
        $update_pd->review= $request['pd_review'];
        $update_pd->save();
        return redirect('/');
    }


    public function like($id){
        $like = ProductReview::find($id);
        $like->votes += 1;
        $like->save();
       
        return back();
    }

    public function unlike($id){
        $like = ProductReview::find($id);
        $like->votes -= 1;
        $like->save();
       
        return back();
    }

    public function destroy($id){
        ProductReview::destroy($id);
        return redirect('/');
    }
}
