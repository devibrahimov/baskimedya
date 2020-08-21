<?php

namespace App\Http\Controllers\Site\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasketController extends Controller
{
   public function index(){
       return view('Site.pages.Products.Shop.cart');
   }
}
