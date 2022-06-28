<?php

namespace App\Http\Controllers;
use App\Models\helpModel;


use Illuminate\Http\Request;

class helpController extends Controller
{
    public function insertion(){
        return view('/insertion');
    }

     public function do_insertion(Request $request){

        $name = $request->input('name');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $password = $request->input('password');
        $array = array($name,$firstname,$lastname,$email,$password);
        $res = insert($array);
        
            echo $res;
   }

   public function showing(){
        return view('/showing');
   }

   public function do_showing(){
        $show_data = show();
        $encoded = json_encode($show_data);
            return view('/showing')->with('encoded',$encoded);

   }
}

