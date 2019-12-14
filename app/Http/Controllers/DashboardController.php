<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Brand;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DashboardController extends Controller
{
    public function blogCreate()
    {
        return view('dashboard.blog.create');
    }
    public function blogStore(Request $request)
    {
        if ($request->title == null ||
            $request->description == null ||
            $request->text == null ||
            empty($request->blog_image))
        {
            $this->validate($request, [
                'title' => 'required|min:5',
                'description' => 'required|min: 15',
                'text' => 'required',
                'blog_image' => 'required',
            ]);
        }
        else
        {
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->text = $request->text;
            $blogImageName = uniqid().'.jpg';
            Image::make($request->blog_image)->save(public_path('img/'. $blogImageName ), 40);
            $blog->blog_image = $blogImageName;
            $blog->save();
            return redirect()->back();
        }
    }

    public function brandCreate()
    {
        return view('dashboard.brand.create');
    }

    public function brandStore(Request $request)
    {
        if ($request->name == null ||
            $request->description == null ||
            empty($request->image))
        {
            $validation = $this->validate($request, [
                'name' => 'required',
                'description' => 'required',
                'image' => 'required',
            ]);
            print_r($validation);
        }
        else
        {
            $brand = new Brand();
            $brand->name = $request->name;
            $brand->description = $request->description;
            $imageName = uniqid().'.jpg';
            Image::make($request->image)->save(public_path('img/'. $imageName ), 40);
            $brand->image = $imageName;
            $brand->save();
        }
    }
}
