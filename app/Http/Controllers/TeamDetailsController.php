<?php

namespace App\Http\Controllers;

use App\Models\bestskill;
use App\Models\constant;
use App\Models\team;
use App\Models\team_det;
use Illuminate\Http\Request;

class TeamDetailsController extends Controller
{
    public function index(Request $request)
    {
        $constant= constant::all();
        $team=team::all()->where('id','=',$request->id);
        
        //return $team_detials->discription;
        //return 0;
        $bestskills=bestskill::all();
        return view('website-bages.team-details.index',compact('constant','team','bestskills'));
    }
}
