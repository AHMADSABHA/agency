<?php

namespace App\Http\Controllers;

use App\Models\agencystatics;
use App\Models\bestskill;
use App\Models\constant;
use App\Models\feature;
use App\Models\latestwork;
use App\Models\plan;
use App\Models\process;
use App\Models\services;
use App\Models\Whatwedo;
use App\Models\working_module;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        $whatwedo = Whatwedo::all();
        $constant= constant::all();
        $agencystatics=agencystatics::all();
        $latest=latestwork::all();
        $service=services::all();
        $plan=plan::all();
        $bestskills=bestskill::all();
        return view('website-bages.services.index',compact('whatwedo','constant','agencystatics','latest','service','plan','bestskills'));
    }

    public function read() 
    {
        $constant= constant::all();
        $process=process::all();
        $latest=latestwork::all();
        $working_mod=working_module::all();
        $feature=feature::all();
        return view('website-bages.services-details.index',compact('constant','process','latest','working_mod','feature'));
    }
}
