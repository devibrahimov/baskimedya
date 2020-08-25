<?php

namespace App\Http\Controllers\Site\Product;

use App\AdditionalOption;
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
        $quantity = $request->qty;


        ############  SQUARE
        $width = $request->width;
        $height= $request->height;

        $SQUARE = $width*$height ;

        ###########END SQUARE


        #==================OPTIONS============================
        $optionid = $request->optionid;
        $option =  Option::find($optionid);
        $optionprice =$option->price ;

        $additionaloptions = $request->additionaloptions;
      //  print_r($additionaloptions); die;
        $ADDITIONALPRICE =  0;

        foreach($additionaloptions as $id ){
           // echo $id.'--';
         $addops = AdditionalOption::find($id);
            $ADDITIONALPRICE +=$addops->price  ;

        }


        #==================end OPTIONS============================

        #create basket==================
        $basket = new Basket() ;
        $basket->user_id =  $user_id;
        $basket->save() ;
        $basket_lastid = $basket->id;
        #get basket id
        #end basket=====================


        $PRICE = 0 ;
        $items =[
            'basket_id' => $basket_lastid,
            'product_id' => $product_id,
            'option_id' => $optionid,
            'additional_options' =>$additionaloptions ,
            'quantity' => $quantity,
            'square_meter' => json_encode(['width'=>$width ,'height'=> $height,'total'=> $SQUARE]),
            'price' => $PRICE

        ];
        Basket()->add($items,$basket_lastid);






    }//end add to cart

}//end class BasketController
