<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\plan;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index()
    {
        $plans = plan::all();
        
        return view('dashboard.pages.plans.list')->with('plans', $plans);
    }

    public function create()
    {
        return view('dashboard.pages.plans.create');
    }

    public function store(Request $request)
    {
        if ($request->method() == 'POST') {
        $request->validate([
            'plan_id' => ['required'],
            'title' => ['required'],
            'price' => ['required'],
            'checked' => ['required'],
            'hidden' => [''],
        ]);
        $requestdata=$request->all();
        plan::create($requestdata);
    }
    
        return redirect()->route('plans.list.view');
        
    }

    public function edit(Request $request, $id)
    {
        $plan = plan::find($id);

        return view('dashboard.pages.plans.edit')
            ->with('plan', [
                
                'plan_id' => $plan->plan_id,
                'title' => $plan->title,
                'price' => $plan->price,
                'checked' => $plan->checked,
                'hidden' => $plan->hidden,
            ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
           
            'title' => ['required'],
            'price' => ['required'],
            'checked' => ['required'],
            'hidden' => [''],
        ]);

        plan::where('plan_id', $id)->update([
           
            'title' => $request->post('title'),
            'price' => $request->post('price'),
            'checked' => $request->post('checked'),
            'hidden' => $request->post('hidden'),
        ]);

        return redirect()->route('plans.list.view');

        // Here we will write our database logic
    }

    public function delete(Request $request, $id)
    {
        $plan = plan::find($id);

        if (!$plan) {
            abort(404);
        }

        $plan->delete();

        return redirect()->route('plans.list.view');

        // Here we will write our database logic
    }
}
