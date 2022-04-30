<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Models\User;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Redirect;

use DB;



class InfoController extends Controller
{
     public function contact(){
        return view('contact');
    }

    public function profile(Request $request){

         $find = User::find(8);
 return view ('profile')->with('name',$find);
 $res=User::where('id',4)->delete();
    }

  public function update(Request $request)
    {
          // $infoId = $request->input('infoId');
          // $user_name = $request->input('user_name');

        $User = User::find(8);

        $User->user_name = 'sir';
        $User->save();
        return redirect()->back()->with('status','Info Updated Successfully');
    }

  public function delete(Request $request)
    {

        $infoId = $request->input('infoId');
        $User = User::where('id',$infoId)->delete();

    return redirect('profile');
    }


    public function do_contact(Request $request){

         // dd($request->input());

        $user_name = $request->input('user_name');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $password = $request->input('password');
  

        $UserModel = new User;
         $UserModel->user_name =  $user_name;
         $UserModel->first_name =  $first_name;
         $UserModel->last_name =  $last_name;
         $UserModel->email =  $email;
          $UserModel->password =   Hash::make($password); 
         
           $UserModel->save();

           return Redirect::to('/contact');



    }

}
