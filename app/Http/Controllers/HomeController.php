<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    public function redirects(){
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                
                return view('user.home');
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }

    }
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
           
            return view('user.home');
        }
        
    }

    public function contact(){
        return view("user.contact");
    }
    public function upload_contact(Request $request)
    {
        $data = new contact;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->property_name = $request->property_name;
        $data->message = $request->message;

        
        $data->save();
        return redirect()->back();
    }
}
