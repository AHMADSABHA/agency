<?php

namespace App\Http\Controllers;

use App\Models\aboutus;
use App\Models\constant;
use App\Models\global_icon;
use App\Models\how_we_are;
use App\Models\memberteam;
use App\Models\services;
use App\Models\team;
use App\Models\testimonials;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $constant= constant::all();
        $aboutus=aboutus::all();
        $how_we_are=how_we_are::all();
        $testmonial=testimonials::all();
        $g_icon=global_icon::all();
        $service=services::all();
        $team=team::all();
        return view('website-bages.about-us.index',compact('constant','aboutus','how_we_are','team','testmonial','g_icon','service'));
    }
}
