<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\team;
use App\Models\team_det;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = team::paginate(2);
      
        return view('dashboard.pages.teams.list')->with('teams', $teams);
    }

    public function create()
    {
        return view('dashboard.pages.teams.create');
    }

    public function store(Request $request)
    {
        if ($request->method() == 'POST') {
        $request->validate([
            
            'image' => ['required'],
            'name' => ['required'],
            'position' => ['required'],
            'facebook' => ['required'],
            'twitter' => ['required'],
            'dribbble' => ['required'],
            'discription' => ['required'],
            'youtube' => ['required'],
            'behance' => ['required'],
            'vemo' => ['required'],
        ]);
        $requestdata=$request->all();
        $fn=time().$request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('images',$fn,'public');
        $requestdata['image']='/storage/'.$path;
        // $array_det=[];
        // $array_det['team_det_id']=$requestdata['team_det_id'];
        // $array_det['discription']=$requestdata['discription'];
        // $array_det['youtube']=$requestdata['youtube'];
        // $array_det['behance']=$requestdata['behance'];
        // $array_det['vemo']=$requestdata['vemo'];
        
        // team_det::create($array_det);
       
        // $array=[];
        // $array['id']=$requestdata['id'];
        // $array['team_det_id']=$requestdata['team_det_id'];
        // $array['image']=$requestdata['image'];
        // $array['name']=$requestdata['name'];
        // $array['position']=$requestdata['position'];
        // $array['facebook']=$requestdata['facebook'];
        // $array['twitter']=$requestdata['twitter' ];
        // $array['dribbble']=$requestdata['dribbble'];
         team::create( $requestdata);

    }
        return redirect()->route('teams.list.view');

       
    }

    public function edit(Request $request, $id)
    {
$team = team::find($id);

        return view('dashboard.pages.teams.edit')
            ->with('team', [
                'id'=>$team->id,
                'team_det_id'=>$team->team_det_id,
                'image' => $team->image,
                'name' => $team->name,
                'position' => $team->position,
                'facebook' => $team->facebook,
                'twitter' => $team->twitter,
                'dribbble' => $team->dribbble,
                'discription' => $team->discription,
                'youtube' => $team->youtube,
                'behance' => $team->behance,
                'vemo' => $team->vemo,
            ]);
        
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'id'=>['required'],
            'team_det_id'=>['required'],
            'image' => ['required'],
            'name' => ['required'],
            'position' => ['required'],
            'facebook' => ['required'],
            'twitter' => ['required'],
            'dribbble' => ['required'],
            'discription' => ['required'],
            'youtube' => ['required'],
            'behance' => ['required'],
            'vemo' => ['required'],
        ]);

        team::where('id', $id)->update([
            'id' => $request->post('id'),
            'team_det_id' => $request->post('team_det_id'),
            'image' => $request->post('image'),
            'name' => $request->post('name'),
            'position' => $request->post('position'),
            'facebook' => $request->post('facebook'),
            'twitter' => $request->post('twitter'),
            'dribbble' => $request->post('dribbble'),
            'discription' =>$request->post('discription'),
            'youtube' => $request->post('youtube'),
            'behance' => $request->post('behance'),
            'vemo' => $request->post('vemo'),
        ]);
       

        return redirect()->route('teams.list.view');

     
    }

    public function delete(Request $request, $id)
    {
        $team = team::find($id);

        if (!$team) {
            abort(404);
        }


        $team->delete();

        return redirect()->route('teams.list.view');

       
    }
}
