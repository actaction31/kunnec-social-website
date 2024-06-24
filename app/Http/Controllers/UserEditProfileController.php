<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;
use App\Country;
use App\Post;
use App\Snap;

class UserEditProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function showUserEditProfile(Request $request){
        $listing_count= $this->perpage;
        //$listing_count= 1;
        $userData=Auth::user();
        $user_id=$userData->id;
        $countries = Country::all();
        $posts=Post::where(['user_id'=>$user_id])
                    ->with('lastfile')
                    ->orderBy('updated_at','DESC')
                    ->paginate($listing_count);
        $snaps=Snap::where(['user_id'=>$user_id])
                    ->with('snapfiles')
                    ->orderBy('updated_at','DESC')
                    ->paginate($listing_count);
        return view('user.edit_profile',['userData'=>$userData,'countries'=>$countries,'posts'=>$posts,'snaps'=>$snaps]);
    }
    public function updateProfile(Request $request){
        $user=Auth::user();
        if($request->image){
            $fileName=$this->fileUpload($request,"image",$this->profilePath);
            if($fileName!=""){
                $old_image=basename($user->image);
                if($old_image!="placeholder.jpg"){
                    File::delete(base_path().$this->profilePath."/".$old_image);
                }
                $user->image=$fileName;
            } 
        }
        $user->profile_status="private";
        if($request->profile_status){
            $user->profile_status=$request->profile_status;
        }
        if($request->headline){
            $user->headline=$request->headline;
        }
        if($request->website){
            $user->website=$request->website;
        }
        if($request->facebook){
            $user->facebook=$request->facebook;
        }
        if($request->instagram){
            $user->instagram=$request->instagram;
        }
        if($request->twitter){
            $user->twitter=$request->twitter;
        }
        if($request->pinterest){
            $user->pinterest=$request->pinterest;
        }
        if($request->youtube){
            $user->youtube=$request->youtube;
        }
        if($request->linkedin){
            $user->linkedin=$request->linkedin;
        }
        if($request->patreon){
            $user->patreon=$request->patreon;
        }
        $user->save();
        $success="success";
        $message="Profile updated successfully!";
        return redirect()->route('edit_profile',['tab'=>'settings'])->with($success,$message);
    }


}



