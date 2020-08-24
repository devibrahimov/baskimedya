<?php

namespace App\Http\Controllers\Site\Product;

use App\Basket;
use App\Http\Controllers\Controller;
use App\Option;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    public function index(){
        return view('Site.pages.Products.Shop.cart');
    }


    public function addtocart(Request $request){

        $optionid = 1;
        $width = 100;
        $height = 100;
        $user_id = $request->user_id ;
        $product_id = 3 ;

        #create basket==================
        $basket = new Basket() ;
        $basket->user_id =  $user_id;
        $basket->save() ;
        $basket_lastid = $basket->id;
        #get basket id
        #end basket=====================

        $option =  Option::find($optionid);

        $items =[

        ];

        Basket::add($items,$basket_lastid);






    }//end add to cart

}//end class BasketController
