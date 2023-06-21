<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Mail\OrderMail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Notification;

use App\Notifications\SendEmailNotification;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');

    }

    public function redirects()
    {

        $usertype= Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.admin');
        }
        else{

            return view('frontend.index');
        }
    }

    public function addcart(Request $request,$id){
        if(Auth::id()){
            $user_id=Auth::id();

            $sevaid=$id;
            $quantity=$request->quantity;

            $cart=new cart;
            $cart->user_id=$user_id;
            $cart->seva_id=$sevaid;
            $cart->quantity=$quantity;

            $cart->save();

            return redirect()->back();
        }
        else{
            return redirect('/register');
        }
    }
    public function showcart(Request $request,$id){
        if(Auth::id()==$id){
$data2=cart::select('*')->where('user_id', '=', $id)->get();
        $data=cart::where('user_id',$id)->join('sevas', 'carts.seva_id','=','sevas.id')->get();
            return view('showcart',compact('data','data2'));
        }
        else{
            return redirect()->back();
        }
    }
        public function remove($id){
            $data=cart::find($id);
            $data->delete();
            return redirect()->back();
        }


    public function orderconfirm(Request $request){


        foreach($request->sevaname as $key => $sevaname){
            $data=new order;

            $data->sevaname= $sevaname;
            $data->price= $request->price[$key];
            $data->quantity= $request->quantity[$key];

            $data->name=$request->name;
            $data->phone=$request->phone;
            $data->email=$request->email;

            $data->save();

            $this->sendOrderConfirmationMail($data);
        }
        return redirect()->back();
    }
    public function sendOrderConfirmationMail($data){
        Mail::to($data->email)->send(new OrderMail($data));
    }


}


