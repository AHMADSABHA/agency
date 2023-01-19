<?php

namespace App\Http\Controllers;

use App\Models\agencystatics;
use App\Models\bestskill;
use App\Models\constant;
use App\Models\team;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index()
    {
        $constant= constant::all();
        $agencystatics=agencystatics::all();
        $team=team::all();
        $bestskills=bestskill::all();
        return view('website-bages.our-team.index',compact('constant','agencystatics','team','bestskills'));
    }
}
