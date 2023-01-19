<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = services::all();
        
        return view('dashboard.pages.services.list')->with('services', $services);
    }

    public function create()
    {
        return view('dashboard.pages.services.creat');
    }

    public function store(Request $request)
    {
        if ($request->method() == 'POST') {
        $request->validate([
            'icon' => ['required','mimes:png,jpg,jpeg'],
            'title' => ['required', 'max:500'],
            'list' => ['required'],
        ]);
        $requestdata=$request->all();
        services::create($requestdata);
    }
       

        return redirect()->route('services.list.view');

       
    }

    public function edit(Request $request, $id)
    {
        $service = services::find($id);

        return view('dashboard.pages.services.edit')
            ->with('service', [
                'id' => $id,
                'icon' => $service->icon,
                'title' => $service->title,
                'list' => $service->list,
            ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'icon' => ['required'],
            'title' => ['required', 'max:500'],
            'list' => ['required'],
        ]);

        services::where('id', $id)->update([
            'icon' => $request->post('icon'),
            'title' => $request->post('title'),
            'list' => $request->post('list'),
        ]);

        return redirect()->route('services.list.view');

       
    }

    public function delete(Request $request, $id)
    {
        $service = services::find($id);

        if (!$service) {
            abort(404);
        }

        $service->delete();

        return redirect()->route('services.list.view');

        // Here we will write our database logic
    }
}
