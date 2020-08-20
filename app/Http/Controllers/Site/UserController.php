<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Province;
use Illuminate\Http\Request;
use App\User ;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index($id,$slug){

        $user = DB::table('users')
            ->join('user_informations' , 'users.id' , '=' ,'user_informations.user_id')
            ->where('users.id','=',$id)
            ->select('users.*','user_informations.*')
            ->first();
     // $user = $user[0];
        $provinces = Province::all();
      return view('Site.pages.User.profil',compact(['user','provinces']));
    }
}
