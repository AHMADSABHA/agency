<?php

namespace App\Http\Controllers;

use App\Models\constant;
use App\Models\latestwork;
use App\Models\project_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class portfolioController extends Controller
{
    public function index(Request $request){
        $constant= constant::all();
      
        $all=DB::table('projects')->join('project_category_relations','projects.project_id','=','project_category_relations.project_id')
        ->join('project_categories','project_category_relations.project_category_id','=','project_categories.project_category_id')->get();
        $category=project_category::all();
        return view('website-bages.protfolio.index',compact('constant','category','all'));
    }
    public function read(Request $request){
        $project_det=latestwork::find(1);
        return view('website-bages.portfolio-details.index',compact('project_det'));
    }
    
}
