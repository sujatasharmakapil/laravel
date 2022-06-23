<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\s1;
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
     public function get1(){
        get();
    }

    public function insert(){
        return view('insert');
    }

    public function get_data(){
         $data = get();
       $encode = json_encode($data);

               return view('get-data')->with('encode',$encode);

    }

   //  public function do_insert(){
   //      if(isset($_POST['btn'])){
   //      $name=$_POST['name'];
   //      $email=$_POST['email'];
   //      $password=$_POST['password'];

   //      $PDO = DB::connection('sqlite')->getPdo();
   // // var_dump($PDO);
   //  $stmt = $PDO->prepare("INSERT INTO s1 (name, email, password) VALUES (?,?,?)");
   //  $res = $stmt->execute(['name','email','password']);

   //  // var_dump($res);

   //  }
   //  }
   
   public function do_insert(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $array = array($name,$email,$password);
        $res = insert($array);
        // $res = insert($name,$email,$password);
        
            echo $res;
   }

    // public function get_data(Request $request){
    //     $idd = s1::where(1)->first();
     
    // }

}
