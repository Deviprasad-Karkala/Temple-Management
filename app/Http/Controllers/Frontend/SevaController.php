<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Seva;


class SevaController extends Controller
{
    public function index(){
        $data=seva::all();
        return view('frontend.Seva',compact("data"));
    }

}
