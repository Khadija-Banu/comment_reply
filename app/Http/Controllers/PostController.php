<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Carbon;
use Image;

class PostController extends Controller
{
    public function b_dashboard(){
   
        return view ('backend.b_dashboard');
    }
    public function userIndex(){
        $users=User::all();
        return view ('backend.user_list',compact('users'));
    }
    public function postIndex(){
        $posts=Post::all();
        return view ('backend.post.post_list',compact('posts'));
    }

    public function postCreate(){
        $users=User::all();
        return view ('backend.post.post_create',compact('users'));
    }


    public function postStore(Request $request){
        try{
   
     $data=$request->all();
     if($request->image){
         $image=$this->UploadImage($request->name,$request->image);
     }
    
     $data['image']=$image;
   
     Post::create($data);
     return redirect()->route('post_list');
    }
    catch(Exception $e){
     return redirect()-route('post_create')->withMessage($e->getMessage());
    }
 }


 public function postEdit($id){
    $users=User::all();
    $post=Post::find($id);
    return view ('backend.post.post_edit',compact('post','users'));
}

public function postUpdate(Request $request,$id){

    try{
        $data=$request->except('_token');

        if($request->hasFile('image')){
            $post=Post::where('id',$id)->first();
            $this->unlink($post->image);
            $data['image']=$this->UploadImage($request->name,$request->image);
        }
        Post::where('id', $id)->update($data);
        return redirect()->route('post_list');
    }catch(Exception $e){
        dd($e->getMessage());
    }  
}

 //Individual vote delete
 public function postDelete($id){
    $data=Post::find($id);
    $data->delete();
    return redirect()->back();
    
}

      //Image upload function
  public function UploadImage($name,$image){
    $timestamp=str_replace([' ',':'],'-',Carbon::now()->toDateTimeString());
    $file_name=$timestamp . '-'.$name. '.' .$image->getClientOriginalExtension();
    $pathToUpload=storage_path().'/app/public/posts/';

    if(!is_dir($pathToUpload)){
     mkdir($pathToUpload, 0755, true);

    }
    Image::make($image)->resize(634,792)->save($pathToUpload.$file_name);
    return $file_name;
 }

 //Image update then previous image delete in storage folder
 private function unlink($image){
     $pathToUpload=storage_path().'/app/public/posts/';
     if($image != '' && file_exists($pathToUpload.$image)){
         @unlink($pathToUpload.$image);
     }
 }


}
