<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = blog::all();
        
        return view('dashboard.pages.blogs.list')->with('blogs', $blogs);
    }

    public function create()
    {
        return view('dashboard.pages.blogs.create');
    }

    public function store(Request $request)
    {
        if ($request->method() == 'POST') {
        $request->validate([
            'blog_id' => ['required'],
            'image' => ['required'],
            'tag' => ['required'],
            'date_blog' => ['required'],
            'title' => ['required'],
            'disc' => ['required'],
            'sub_image' => ['required'],
            'title2' => ['required'],
            'disc2' => ['required'],
            'list' => ['required'],
        ]);
        $requestdata=$request->all();
        $fn=time().$request->file('sub_image')->getClientOriginalName();
        $path=$request->file('sub_image')->storeAs('images',$fn,'public');
        $requestdata['sub_image']='/storage/'.$path;

        $fn=time().$request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('images',$fn,'public');
        $requestdata['image']='/storage/'.$path;

        blog::create($requestdata);
    }
       

        return redirect()->route('blogs.list.view');

       
    }

    public function edit(Request $request, $id)
    {
        $blog = blog::find($id);

        return view('dashboard.pages.blogs.edit')
            ->with('blog', [
               
                'blog_id' => $blog->blog_id,
                'image' => $blog->image,
                'tag' => $blog->tag,
                'date_blog' => $blog->date_blog,
                'title' => $blog->title,
                'disc' => $blog->disc,
                'sub_image' => $blog->sub_image,
                'title2' => $blog->title2,
                'disc2'=>$blog->disc2,
                'list'=>$blog->list,
            ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'blog_id' => ['required'],
            'image' => ['required'],
            'tag' => ['required'],
            'date_blog' => ['required'],
            'title' => ['required'],
            'disc' => ['required'],
            'sub_image' => ['required'],
            'title2' => ['required'],
            'disc2' => ['required'],
            'list'=>['required'],
        ]);

        blog::where('blog_id', $id)->update([
            'blog_id' => $request->post('blog_id'),
            'image' => $request->post('image'),
            'tag' => $request->post('tag'),
            'date_blog' => $request->post('date_blog'),
            'title' => $request->post('title'),
            'disc' => $request->post('disc'),
            'sub_image' => $request->post('sub_image'),
            'title2' => $request->post('title2'),
            'disc2' => $request->post('disc2'),
            'list'=>$request->post('list'),
        ]);

        return redirect()->route('blogs.list.view');

      
    }

    public function delete(Request $request, $id)
    {
        $blog = blog::find($id);

        if (!$blog) {
            abort(404);
        }

        $blog->delete();

        return redirect()->route('blogs.list.view');

        // Here we will write our database logic
    }
}
