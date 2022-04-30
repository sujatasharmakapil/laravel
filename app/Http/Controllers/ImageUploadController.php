<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\imageModel;
  
class ImageUploadController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('imageUpload');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
        // dd($request->hasFile('imageName'));
        $title = $request->input('title');
        $description = $request->input('description');

         
         if ($request->hasFile('imageName')) {

            
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
    
        $imageName = time().'.'.$request->imageName->extension();  
        // dd( $imageName);
        $request->imageName->move(public_path('images'), $imageName);
  
        /* Store $imageName name in DATABASE from HERE */
        $imageModel = new imageModel();
        $imageModel->imageName = $imageName;
        $imageModel->title = $title;
        $imageModel->description = $description;
            $imageModel->save(); // Finally, save the record.
        }

    
        return back()
            ->with('success','You have successfully upload image.');
    }
}