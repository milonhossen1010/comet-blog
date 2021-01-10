<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
     
    function profileIndex()
     {
       $uer_id = Auth::user()->id;

       $user = User::find($uer_id);

       return view('backend.users.profile', compact('user'));
     }

     public function profileEdit(Request $request)
     {
        $uer_id = Auth::user()->id;
        $user = User::find($uer_id);

        if ($user -> username !== $request->username){
            $this -> validate($request,[
                'username' => 'unique:users'
            ]);
        }
        

        //password fill up check 
        if ($request->password==true) {
            $password = $request -> password;
         }else{
             $password = $user->password;
         }

         

      

        //Image function
        if( $request -> hasFile('img') ){
            $profile_img = $request -> file('img');
            $profile_pic = strtolower($request->first_name). "'s-profile-photo" . rand(1,100) .'.'. $profile_img -> getClientOriginalExtension();
            $profile_img -> move(public_path('media/images/users'), $profile_pic );


            if ($user -> img !== 'avatar.png') {
                 //  Existing image delete
                $profile_path = 'media/images/users/' . $user->img;

                if(file_exists($profile_path)){
                    unlink($profile_path);
                
                }

             }
       
        } else{
            $profile_pic = $user->img;
        }

        $user -> first_name = $request -> first_name;
        $user -> last_name = $request -> last_name;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> bio = $request -> bio;
        $user -> password = Hash::make($password);
        $user -> img = $profile_pic;
        $user -> update();


        return redirect()->back()->with("success","Profile updated successful!!");

     }

     //Account delete
     public function profileDelete(Request $request)
     {
        $user_id = $request-> user_id;
        $user = User::find($user_id);

        //  Existing image delete
       
        if ($user -> img !== 'avatar.png') {
            //  Existing image delete
           $profile_path = 'media/images/users/' . $user->img;

           if(file_exists($profile_path)){
               unlink($profile_path);
           }
        }
        
        $user -> delete();
        return redirect()->route("login")->with("success","Account deleted successful!");
     }


     //All users function
     public function allUserIndex()
     {
         $all_users = User::all();
        return view('backend.users.all-users', compact('all_users'));
     }

     //Users edit
     public function userEdit($id)
     {
         $user = User::find($id);

         return view('backend.users.edit', compact('user'));
     }

     //User update
     public function userUpdate(Request $request)
     {
       $user_id = $request->id;
       $user = User::find($user_id);

         //password fill up check 
         if ($request->password==true) {
            $password = $request -> password;
         }else{
             $password = $user->password;
         }

        $user -> first_name = $request -> first_name;
        $user -> last_name = $request -> last_name;
        $user -> username = $request -> username;
        $user -> role = $request -> role;
        $user -> email = $request -> email;
        $user -> password = Hash::make($password);
        $user -> update();

        return redirect()->back()->with('success','Update successful!');
     }


     //User delete
     public function userDelete($id)
     {
        $user = User::find($id);

        if ($user -> img !== 'avatar.png') {
            //  Existing image delete
           $profile_path = 'media/images/users/' . $user->img;

           if(file_exists($profile_path)){
               unlink($profile_path);
           }
        }

        $user -> delete();
 
        return redirect()->back()->with('success','User delete successful!!');
     }







}
