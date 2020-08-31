<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Item;
// use App\Http\Controllers\App\Item;


class FrontendController extends Controller
{
    function home($value=''){
    	$items =Item::orderBy('id','desc')->take(3)->get();
    	// dd($items);
    	return view('frontend.home',compact('items'));
    }
    //itemController ->show
    public function itemdetail($item){
    	$item=Item::find($item);
    	return view('frontend.detail',compact('item'));
    }

     public function cart(){
    	return view('frontend.cart');
    }
}
