<?php

namespace App\Http\Controllers;

use App\Models\agencystatics;
use App\Models\bestskill;
use App\Models\constant;
use App\Models\services;
use Illuminate\Http\Request;

class MultiCreativeController extends Controller
{
    public function index()
    {
        $constant=constant::all();
        $agencystatics=agencystatics::all();
        $service=services::all();
        $bestskills=bestskill::all();
        return view('website-bages.multipage-creative.index',compact('constant','agencystatics','service','bestskills'));
    }
    public function index2()
    {
        $service=services::all();
        $constant=constant::all();
        $agencystatics=agencystatics::all();
        return view('website-bages.onepages-creative.index',compact('constant','service','agencystatics'));
       }
}
