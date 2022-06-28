<?php

namespace App\Http\Controllers;
use App\Models\helping;


use Illuminate\Http\Request;

class helpingController extends Controller
{
    public function insertion1(){
        return view('/insertion1');
    }

     public function do_insertion1(Request $request){

        $name = $request->input('name');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $password = $request->input('password');
        $array = array($name,$firstname,$lastname,$email,$password);
        $res = insert($array);
        
            echo $res;
   }

   public function showing1(){
        return view('/showing1');
   }

   public function do_showing1(){
        $show_data = show();
        $encoded = json_encode($show_data);
            return view('/showing1')->with('encoded',$encoded);

   }
}