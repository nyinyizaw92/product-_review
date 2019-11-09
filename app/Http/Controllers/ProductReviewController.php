<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProductReview;

class ProductReviewController extends Controller
{
    public function index(){
        $pd_list = ProductReview::all();


        return view('partials.home',compact('pd_list'));
    }

    public function editpage($id){
        $edit_pd = ProductReview::find($id);
       
        return view('partials.editpage',compact('edit_pd'));
    }
}
