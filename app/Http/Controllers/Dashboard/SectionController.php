<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\aboutus;
use App\Models\agencystatics;
use App\Models\feature;
use App\Models\get_in_touch;
use App\Models\how_we_are;
use App\Models\process;
use App\Models\Whatwedo;
use App\Models\working_module;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class SectionController extends Controller
{
    public function hero(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'title' => ['required', 'max:20'],
                'description' => ['required', 'min:10', 'max:200'],
                'link' => ['required'],
                'image' => ['required', 'image', 'mimes:jpg,jpeg,png'],
            ]);

        }

        return view('dashboard.pages.section.hero.form')
            ->with('sectionData', [
                'title' => '',
                'description' => '',
                'link' => '',
            ])
        ;
    }
    public function whatwedo(Request $request)
    {
        if ($request->method() == 'POST') {
            $request->validate([
                'image' => ['required', 'image', 'mimes:jpeg,bmp,png,jpg'],
                'title' => ['required', 'max:20'],
                'subtitle' => ['required', 'max:20'],
                'discription' => ['required', 'min:10', 'max:200'],
                'link' => ['required', 'url'],
            ]);
            $requestdata=$request->all();
            $fn=time().$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$fn,'public');
            $requestdata['image']='/storage/'.$path;
            Whatwedo::create($requestdata);
            
        }
        return view('dashboard.pages.section.what-we-do.form')
            ->with('what_we_do', [
                'title' => '',
                'subtitle' => '',
                'discription' => '',
                'link' => '',
                
            ])
        ;
    }
    public function howweare(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'title' => ['required', 'max:20'],
                'subtltle' => ['required', 'max:20'],
                'discription' => ['required', 'min:10', 'max:200'],
                'image' => ['required', 'image', 'mimes:jpeg,bmp,png,jpg'],
            ]);
            $requestdata=$request->all();
            $fn=time().$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$fn,'public');
            $requestdata['image']='/storage/'.$path;
            how_we_are::create($requestdata);

        }

        return view('dashboard.pages.section.how-we-are.form')
            ->with('sectionData', [
                'title' => '',
                'subtltle' => '',
                'discription' => '',
            ])
        ;
    }
    public function processe(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'icon' => ['required', 'image', 'mimes:jpg,jpeg,png'],
                'title' => ['required', 'max:20'],
                'subtitle' => ['required', 'max:20'],
            ]);

            $requestdata=$request->all();
            $fn=time().$request->file('icon')->getClientOriginalName();
            $path=$request->file('icon')->storeAs('images',$fn,'public');
            $requestdata['icon']='/storage/'.$path;
            process::create($requestdata);

        }

        return view('dashboard.pages.section.processe.form')
            ->with('sectionData', [
                'title' => '',
                'subtitle' => '',
            ])
        ;
    }
    public function feature(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'feature_id' => ['required'],
                'title' => ['required', 'max:20'],
                'subtitle' => ['required', 'max:20'],
                'discription' => ['required', 'min:10', 'max:200'],
                'list' => ['required'],
                'sublist' => ['required'],
            ]);

            $requestdata=$request->all();
            feature::create($requestdata);

        }

        return view('dashboard.pages.section.feature.form')
            ->with('sectionData', [
                'feature_id' =>'',
                'title' => '',
                'subtitle' => '',
                'discription' => '',
                'list' => '',
                'sublist' => '',
            ])
        ;
    }
    public function aboutus(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'title' => ['required', 'max:20'],
                'subtitle' => ['required', 'max:20'],
                'description' => ['required', 'min:10', 'max:200'],
                'list' => ['required'],
                'image' => ['required', 'image', 'mimes:jpg,jpeg,png'],
            ]);
            $requestdata=$request->all();
            $fn=time().$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$fn,'public');
            $requestdata['image']='/storage/'.$path;
            aboutus::create($requestdata);

        }

        return view('dashboard.pages.section.aboutus.form')
            ->with('sectionData', [
                'title' => '',
                'subtitle' => '',
                'list' => '',
                'description' => '',
            ])
        ;
    }
    public function workmodule(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'icon' => ['required', 'image', 'mimes:jpeg,bmp,png,jpg'],
                'step' => ['required'],
                'title' => ['required', 'max:20'],
                'subtitle' => ['required', 'max:20'],
            ]);

            $requestdata=$request->all();
            $fn=time().$request->file('icon')->getClientOriginalName();
            $path=$request->file('icon')->storeAs('images',$fn,'public');
            $requestdata['icon']='/storage/'.$path;
            working_module::create($requestdata);

        }

        return view('dashboard.pages.section.work-module.form')
            ->with('sectionData', [
                'step' => '',
                'title' => '',
                'subtitle' => '',
            ])
        ;
    }
    public function agencystatistic(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'icon' => ['required', 'image', 'mimes:jpg,jpeg,png'],
                'number' => ['required','numeric'],
                'extinsion' => ['required'],
                'type' => ['required', 'max:20'],
            ]);
            $requestdata=$request->all();
            $fn=time().$request->file('icon')->getClientOriginalName();
            $path=$request->file('icon')->storeAs('images',$fn,'public');
            $requestdata['icon']='/storage/'.$path;
            agencystatics::create($requestdata);

        }

        return view('dashboard.pages.section.agency-statistic.form')
            ->with('sectionData', [
                'number' => '',
                'extinsion'=>'',
                'type' => '',
            ])
        ;
    }
    public function getintouch(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'title' => ['required', 'min:4', 'max:200'],
                'subtitle' => ['required'],
                'icon' => ['required'],
            ]);
            $requestdata=$request->all();
            get_in_touch::create($requestdata);

        }

        return view('dashboard.pages.section.contact-details.form')
            ->with('sectionData', [
                'title' => '',
                'subtitle' => '',
                'icon' =>'',
                
            ])
        ;
    }
}
