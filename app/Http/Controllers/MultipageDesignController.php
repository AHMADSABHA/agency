<?php

namespace App\Http\Controllers;

use App\Models\constant;
use Illuminate\Http\Request;

class MultipageDesignController extends Controller
{
   public function index(){
      $constant= constant::all();
    return view('website-bages.multipages-design.index',compact('constant'));
   }
   public function index2(){
      $constant= constant::all();
    return view('website-bages.onepages-design.index',compact('constant'));
   }
}
