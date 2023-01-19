<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\latestwork;
use Illuminate\Http\Request;


class projectsController extends Controller
{
    public function index()
    {
        $projects = latestwork::all();
        
        return view('dashboard.pages.projects.list')->with('projects', $projects);
    }

    public function create()
    {
        return view('dashboard.pages.projects.create');
    }

    public function store(Request $request)
    {
        if ($request->method() == 'POST') {
        $request->validate([
            'project_id' => ['required'],
            'cover_image' => ['required'],
            'title' => ['required'],
            'subtitle' => ['required'],
            'client' => ['required'],
            'location' => ['required'],
            'project_url' => ['required'],
            'description' => ['required'],
            'title2' => ['required'],
            'description2' => ['required'],
            'image' => ['required'],
            'project_date' => ['required'],
            'title3' => ['required'],
            'disc3' => ['required'],
        ]);
        $requestdata=$request->all();
        $fn=time().$request->file('cover_image')->getClientOriginalName();
        $path=$request->file('cover_image')->storeAs('images',$fn,'public');
        $requestdata['cover_image']='/storage/'.$path;
        $fn1=time().$request->file('image')->getClientOriginalName();
        $path1=$request->file('image')->storeAs('images',$fn1,'public');
        $requestdata['image']='/storage/'.$path1;
        latestwork::create($requestdata);
    }
       

        return redirect()->route('projects.list.view');

       
    }

    public function edit(Request $request, $id)
    {
        $project = latestwork::find($id);

        return view('dashboard.pages.projects.edit')
            ->with('project', [
               
                'project_id' => $project->project_id,
                'cover_image' => $project->cover_image,
                'title' => $project->title,
                'subtitle' => $project->subtitle,
                'client' => $project->client,
                'location' => $project->location,
                'project_url' => $project->project_url,
                'description' => $project->description,
                'title2' => $project->title2,
                'description2' => $project->description2,
                'image' => $project->image,
                'project_date' => $project->project_date,
                'title3' => $project->title3,
                'disc3' => $project->disc3,
                
            ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'project_id' => ['required'],
            'cover_image' => ['required'],
            'title' => ['required'],
            'subtitle' => ['required'],
            'client' => ['required'],
            'location' => ['required'],
            'project_url' => ['required'],
            'description' => ['required'],
            'title2' => ['required'],
            'description2' => ['required'],
            'image' => ['required'],
            'project_date' => ['required'],
            'title3' => ['required'],
            'disc3' => ['required'],
        ]);

        latestwork::where('project_id', $id)->update([
            'project_id' => $request->post('project_id'),
            'cover_image' => $request->post('cover_image'),
            'title' => $request->post('title'),
            'subtitle' => $request->post('subtitle'),
            'client' => $request->post('client'),
            'location' => $request->post('location'),
            'project_url' => $request->post('project_url'),
            'description' => $request->post('description'),
            'title2' => $request->post('title2'),
            'description2' => $request->post('description2'),
            'image' => $request->post('image'),
            'project_date' => $request->post('project_date'),
            'title3' => $request->post('title3'),
            'disc3' => $request->post('disc3'),
        ]);

        return redirect()->route('projects.list.view');

        
    }

    public function delete(Request $request, $id)
    {
        $project = latestwork::find($id);

        if (!$project) {
            abort(404);
        }

        $project->delete();

        return redirect()->route('projects.list.view');

        
    }
}
