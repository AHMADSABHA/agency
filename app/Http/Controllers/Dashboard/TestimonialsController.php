<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimonials = testimonials::all();
        
        return view('dashboard.pages.testimonials.list')->with('testimonials', $testimonials);
    }

    public function create()
    {
        return view('dashboard.pages.testimonials.create');
    }

    public function store(Request $request)
    {
        if ($request->method() == 'POST') {
        $request->validate([
            'icon' => ['required'],
            'discription' => ['required', 'max:500'],
            'Name' => ['required'],
            'position' => ['required'],
        ]);
        $requestdata=$request->all();
        $fn=time().$request->file('icon')->getClientOriginalName();
        $path=$request->file('icon')->storeAs('images',$fn,'public');
        $requestdata['icon']='/storage/'.$path;
        testimonials::create($requestdata);
    }
       

        return redirect()->route('testimonials.list.view');

       
    }

    public function edit(Request $request, $id)
    {
        $testimonial = testimonials::find($id);

        return view('dashboard.pages.testimonials.edit')
            ->with('testimonial', [
                'id' => $id,
                'icon' => $testimonial->icon,
                'discription' => $testimonial->discription,
                'Name' => $testimonial->Name,
                'position' => $testimonial->position,
            ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'icon' => ['required'],
            'discription' => ['required', 'max:500'],
            'Name' => ['required'],
            'position' => ['required'],
        ]);

        testimonials::where('id', $id)->update([
            'icon' => $request->post('icon'),
            'discription' => $request->post('discription'),
            'Name' => $request->post('Name'),
            'position' => $request->post('position'),
        ]);

        return redirect()->route('testimonials.list.view');

        // Here we will write our database logic
    }

    public function delete(Request $request, $id)
    {
        $testimonial = testimonials::find($id);

        if (!$testimonial) {
            abort(404);
        }

        $testimonial->delete();

        return redirect()->route('testimonials.list.view');

        // Here we will write our database logic
    }
}
