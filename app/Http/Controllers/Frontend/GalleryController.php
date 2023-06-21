<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index(){
        $data2=gallery::all();
        return view('frontend.Gallery',compact("data2"));
    }
}
