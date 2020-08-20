<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Province;
use  Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use App\User ;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index($slug , $userid){
      //  $id = Crypt::decrypt( $request->input('unm'));

        $id = Crypt::decrypt($userid);

        $user = DB::table('users')
            ->join('user_informations' , 'users.id' , '=' ,'user_informations.user_id')
            ->where('users.id','=',$id)
            ->select('users.*','user_informations.*')
            ->first();
     // $user = $user[0];
        $provinces = Province::all();
      return view('Site.pages.User.profil',compact(['user','provinces']));
    }

    public function changepassword(Request $request){

//        $this->validate($request->all(), [
//            'password'=>'required|string|max:80|',
//            'newpassword'=>'required|string|max:80|confirmed|different:password'
//        ],[
//            'password.required'=> 'Eski Şifrenizi Boş Bırakamazsınız',
//            'newpassword.confirmed' => 'Girdiyiniz Şifre Tekrarı Eşleşmiyor'
//        ]);

        $id = Crypt::decrypt($request->uid);

        $user = User::findOrFail($id);

        if (Hash::check($request->password, $user->password)) {
            $user->fill([
                'password' => Hash::make($request->newpassword)
            ])->save();

            $request->session()->flash('success', 'Şifreniz Yenilendi.Siteye tekrar giriş edin');
            auth()->logout();
            return redirect()->back();

        } else {
            $request->session()->flash('error', 'Şifre Yenilenemedi.Tekrar deneyin');
            return redirect()->back();
        }
    }
}
