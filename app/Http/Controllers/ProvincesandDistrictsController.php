<?php

namespace App\Http\Controllers;

use App\District;
use Illuminate\Http\Request;

class ProvincesandDistrictsController extends Controller
{



    public function getajaxdistrict(Request $request){

        $dbdata = District::where('province_no', '=' ,$request->provinceno)->get();

        $districts = '' ;

        $selected = '' ;
        foreach ($dbdata as  $key=> $district){
//            if(){
//
//            }
            reset($dbdata);
            if ($key === key($dbdata))
                    $selected='selected';

            $districts .= '<option  '.$selected.' value="'.$district->province_no.'">'.$district->name.'</option>' ;


        }
        return $districts ;
        }
} //endclass
