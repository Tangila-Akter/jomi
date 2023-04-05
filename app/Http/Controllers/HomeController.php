<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use App\Models\Contact;
use App\Models\Property;
use App\Models\Cart;
use App\Models\Lists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    
    //     {
    //         if(Auth::user()->usertype=='0')
    //         {
                
    //             return view('user.home');
    //         }
    //         else
    //         {
    //             return view('admin.home');
    //         }
    //     }
    //     else
    //     {
    //         return redirect()->back();
    //     }

    // }
    // public function index(){
    //     if(Auth::id()){
    //         return redirect('home');
    //     }
    //     else{
           
    //         return view('user.home');
    //     }
        
    // }
    public function redirect(Request $request){
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                
            $search = $request['search'] ?? "";
            if($search != ""){
                $data=Property::where('title', 'LIKE', "%$search%")->orWhere('type', 'LIKE', "%$search%")->orWhere('user_name', 'LIKE', "%$search%")->get();
            }else{
                $data=Property::all();
                
            }
            return view("user.home", compact("search", "data"));
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
    public function index(Request $request){
        if(Auth::id()){
            
            return redirect('home');
        }
        else{
            $search = $request['search'] ?? "";
            if($search != ""){
                $data=Property::where('title', 'LIKE', "%$search%")->orWhere('type', 'LIKE', "%$search%")->orWhere('user_name', 'LIKE', "%$search%")->get();
            }else{
                $data=Property::all();
                
            }
            return view("user.home", compact("search", "data"));
            
        }
        
    }
    public function user_about(){

        $data = DB::table('abouts')->orderBy('id', 'desc')->limit(1)->get();
        return view("user.user_about", compact("data"));
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
        if(Auth::Id()){
        $user_id = Auth::user()->id;
        $data=Property::where('user_id', $user_id)->get();
        return view("user.post", compact("data"));
    }
    else{
        return redirect('/login');
    }
    }
    
    
    public function upload_post(Request $request){

        if (Auth::Id()) {
            $data = new Property;
            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('post', $imagename);
            $data->image = $imagename;
            $data->title = $request->title;
            $data->price = $request->price;
            $data->type = $request->type;
            $data->details = $request->details;
            $data->user_id = $request->user_id;
            $data->user_email = $request->user_email;
            $data->user_name = $request->user_name;
            $data->save();
            return redirect()->back()->with('message', 'Post Added Successfully');
        }
        else
        {
            return redirect('/login');
        }
    }
    public function upload( Request $request)
    {
        $data = new Property;
        $image=$request->image;
         $imagename=time().'.'.$image->getClientOriginalExtension() ;
         $request->image->move('post',$imagename);
         $data->image=$imagename;
         $data->title = $request->title;
         $data->price = $request->price;
         $data->type = $request->type;
         $data->details = $request->details;
         $data->user_id = $request->user_id;
         $data->user_email = $request->user_email;
         $data->user_name = $request->user_name;
        $data->save();

        return redirect()->back()->with('message', 'Post Added Successfully');
    }
    public function list(Request $request){
        $search = $request['search'] ?? "";
        
        if($search != ""){
            $data=Property::where('title', 'LIKE', "%$search%")->orWhere('type', 'LIKE', "%$search%")->orWhere('user_name', 'LIKE', "%$search%")->get();
        }else{
            $data=Property::all();
            
        }

        $option = $request['option'] ?? "";
        
        if($option != ""){
            $data=Property::where('type', 'LIKE', "%$option%")->get();
        }else{
            $data=Property::all();
            
        }
        // $rent = 'rent';
        // $buy = 'buy';
        // $sell = 'sell';
        // $option = $data=Property::where('type', 'LIKE', "%$rent%")->orWhere('type', 'LIKE', "%$buy%")->orWhere('type', 'LIKE', "%$sell%")->get();
        return view("user.list", compact("data","search", "option"));
    }
    public function addcart(Request $request,$id)
    {
        if(Auth::Id())
        {
            $user_id=Auth::Id();
            $postid=$id;
            $data= new lists;
            $data->user_id=$user_id;
            $data->post_id=$postid;
            $data->user_id = $request->user_id;
            $data->user_email = $request->user_email;
            $data->user_name = $request->user_name;
            $data->save();

            return redirect()->back()->with('message', 'Your request has been sent. We will contact you soon.');
        }
        else
        {
            return redirect('/login');
        }
    }
    public function addcarthome(Request $request,$id)
    {
        if(Auth::Id())
        {
            $user_id=Auth::Id();
            $postid=$id;
            $data= new lists;
            $data->user_id=$user_id;
            $data->post_id=$postid;
            $data->user_id = $request->user_id;
            $data->user_email = $request->user_email;
            $data->user_name = $request->user_name;
            $data->save();

            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }
    }
    public function productlist(){
        $property = Property::where('title')->orWhere('type')->orWhere('user_name')->get();
        $data = [];

        foreach( $property as $property){
            $data[] = $property['title' && 'type' && 'user_name'];
            // $data = $property['title', 'type'];
        }
        return $data;
    }
}
