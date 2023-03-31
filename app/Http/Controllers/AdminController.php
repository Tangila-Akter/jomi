<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Contact;
use App\Models\Property;
use App\Models\Lists;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin_account(){
        $data=User::all();
        return view("admin.account", compact("data"));
    }
    public function admin_upload(Request $request)
     {
         $user = new user;
          $user->name=$request->name;
          $user->email=$request->email;
          $user->usertype=$request->usertype;
          $user->email_verified_at=$request->email_verified_at;
          $user->password=Hash::make($request->password);
          $user->save();
          return redirect()->back(); 
     }
     public function deleteadmin($id)
     {
         $data=user::find($id);
         $data->delete();
         return redirect()->back();
     }
     public function admin_post(){
        $data=Property::all();
        return view("admin.post", compact("data"));
    }
    public function deletepost($id)
     {
         $data=Property::find($id);
         $data->delete();
         return redirect()->back();
     }
    public function admin_list(Request $request,$id)
    {
        if(Auth::id()==$id)
        {
          
        $data =DB::table('lists')
            ->join('properties', 'lists.id', '=', 'properties.id')
            ->get();
        return view("admin.lists", compact('data'));
    }
    else
    {
        return redirect()->back();
    }
    }
    public function deletelist($id)
     {
         $data=lists::find($id);
         $data->delete();
         return redirect()->back();
     }
    public function admin_contact(){
        $data=Contact::all();
        return view("admin.contact", compact("data"));
    }
    public function deletecontact($id)
     {
         $data=Contact::find($id);
         $data->delete();
         return redirect()->back();
     }
     public function admin_about(){
        $data=About::all();
        return view("admin.about", compact("data"));
    }
    public function admin_aboutUpload(Request $request)
     {
         $user = new About;
          $user->aboutUs=$request->aboutUs;
          $user->whatWeDo=$request->whatWeDo;
          $user->save();
          return redirect()->back(); 
     }
     public function deleteadminabout($id)
     {
         $data=About::find($id);
         $data->delete();
         return redirect()->back();
     }
}
