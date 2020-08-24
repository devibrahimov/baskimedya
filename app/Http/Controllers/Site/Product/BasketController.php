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


        $user_id = $request->user_id ;
        $product_id = $request->product_id ;

        $qty = $request->qty;


        ############  SQUARE

        $width = $request->width;
        $height= $request->height;

        $square = $width*$height ;

        ###########END SQUARE


        #==================OPTIONS============================
        $optionid = $request->optionid;
        $option =  Option::find($optionid);

        $additionaloptions = $request->additionaloptions;

        print_r($additionaloptions); die;
        #==================end OPTIONS============================

        #create basket==================
        $basket = new Basket() ;
        $basket->user_id =  $user_id;
        $basket->save() ;
        $basket_lastid = $basket->id;
        #get basket id
        #end basket=====================


        //Basket()->add($items,$basket_lastid);






    }//end add to cart

}//end class BasketController
