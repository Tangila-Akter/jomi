<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Contact;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    public function cost(){
        $user_id = Auth::user()->id;
        $data=Property::where('user_id', $user_id)->get();
        return view("user.post", compact("data"));
    }
    
    public function upload_post(Request $request){
        $data = new Property;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('post',$imagename);
        $data->image=$imagename;

        // $image=$request->image;
        //  $imagename=time().'.'.$image->getClientOriginalExtension() ;
        //  $request->image->move('post',$image);
        //  $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->type=$request->type;
        $data->details=$request->details;
        $data->user_id=$request->user_id;
        $data->user_email=$request->user_email;
        $data->user_name=$request->user_name;
        $data->save();
        return redirect()->back()->with('message','Post Added Successfully');
    }
    public function list(){
        $data=Property::all();
        return view("user.list", compact("data"));
    }
}
