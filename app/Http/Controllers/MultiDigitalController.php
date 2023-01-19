<?php

namespace App\Http\Controllers;

use App\Models\constant;
use App\Models\global_icon;
use Illuminate\Http\Request;

class MultiDigitalController extends Controller
{
    public function index()
    {
        $constant= constant::all();
        $g_icon=global_icon::all();
        return view('website-bages.multipage-digital.index',compact('constant','g_icon'));
    }
    public function index2()
    {$constant= constant::all();
        $g_icon=global_icon::all();
        return view('website-bages.onepages-digital.index',compact('constant','g_icon'));
       }
}
