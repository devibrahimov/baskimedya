<?php

namespace App\Http\Controllers\Site\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function addtocart(Request $request){
        ini_set('memory_limit', '-1');
        print_r($request);
    }
}
