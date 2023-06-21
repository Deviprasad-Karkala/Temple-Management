<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Seva;
use App\Models\Feedback;
use App\Models\Gallery;
use App\Models\Order;
class AdminController extends Controller
{
    public function user(){
        $data= user::all();
        return view('admin.users',compact('data'));
    }
    public function deleteuser($id){
        $data= user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deleteseva($id){
        $data= seva::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id){
        $data= seva::find($id);

        return view("admin.updateview",compact("data"));
    }
    public function update(Request $request,$id){
        $data= seva::find($id);
        $image=$request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('sevaimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->descr=$request->descr;
        $data->price=$request->price;
        $data->save();
        return redirect()->back();
    }


    public function sevalist(){
        $data= seva::all();
        return view('admin.sevalist',compact("data"));
    }

    public function upload(Request $request){
        $data=new seva;

        $image=$request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('sevaimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->descr=$request->descr;
        $data->price=$request->price;
        $data->save();
        return redirect()->back();
    }

    public function feedback(Request $request){
        $data=new feedback;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->feedback=$request->feedback;
        $data->save();
        return redirect()->back();
    }
    public function viewfeedback(){
        $data=feedback::all();

        return view("admin.adminfeedback",compact("data"));
    }
    public function viewgallery(){

        $data=gallery::all();
        return view("admin.admingallery",compact("data"));
    }

    public function uploadgallery(Request $request){
        $data=new gallery;

        $image=$request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('templegallery',$imagename);

        $data->image=$imagename;
        $data->save();
        return redirect()->back();
    }
    public function updateimage($id){
        $data= gallery::find($id);

        return view("admin.updateimage",compact("data"));
    }

    public function updategallery(Request $request ,$id){
        $data= gallery::find($id);
        $image=$request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('templegallery',$imagename);

        $data->image=$imagename;

        $data->save();
        return redirect()->back();
    }

    public function deleteimage($id){
        $data= gallery::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orders(){
        $data= order::all();
        return view("admin.orders",compact('data'));
    }
}
