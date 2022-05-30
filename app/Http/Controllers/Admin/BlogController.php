<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', ['items' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::get();
        return view('admin.blog.create', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $validator = Validator::make($request->all() , [
        // $this->validate(
        //     $request,
        //     [


        //         'image_ar' => 'required|array',
        //         'image_ar.*' => 'required|image|dimensions:min_width=1900,min_height=600,max_width=2080,max_height=1280',


        //         'image_en' => 'required|array',
        //         'image_en.*' => 'required|image|dimensions:min_width=1900,min_height=600,max_width=2080,max_height=1280',


        //         'name_ar' => 'required|string|min:4|max:200',
        //         'name_en' => 'required|string|min:4|max:200',

        //     ],
        //     [
        //         'image_ar' => 'image required',
        //         'image_ar.*.*' => '-dimensions-min=1920,min_height=600,max_width=2080,max_height=1280',


        //         'image_en' => 'image required',
        //         'image_en.*.*' => '-dimensions-min=1920,min_height=600,max_width=2080,max_height=1280',

        //     ]
        // );


        $inputs = $request->all();

        if ($request->image_ar) {
            $inputs['image_ar'] = upload_img_resize($request->image_ar[0], 'photos/', 1920, 700);
        }

        if ($request->image_en) {
            $inputs['image_en'] = upload_img_resize($request->image_en[0], 'photos/', 1920, 700);
        }


        $inputs['user_id']=Auth()->user()->id;


        $blog  = Blog::create($inputs);




        alert()->success(__('Blog.done') . __('Blog.add'))->autoclose(5000);

        return redirect(route('dashboard.blog.index'));
        return response()->json(['status' => true, 'url' => route('dashboard.blog.index')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories=Category::get();
        return view('admin.blog.edit', ['item' => $blog , 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {

        // $this->validate(
        //     $request,
        //     [


        //         'image_ar.*' => 'nullable|image|dimensions:min_width=1900,min_height=1000,max_width=2080,max_height=1280',


        //         'image_en.*' => 'nullable|image|dimensions:min_width=1900,min_height=1000,max_width=2080,max_height=1280',

        //     ],
        //     [
        //         'image_ar' => 'image required',
        //         'image_ar.*.*' => '-dimensions-min=1920,min_height=1080,max_width=2080,max_height=1280',


        //         'image_en' => 'image required',
        //         'image_en.*.*' => '-dimensions-min=1920,min_height=1080,max_width=2080,max_height=1280',



        //     ]
        // );


        $inputs = $request->all();


        if (isset($request->image_ar[0]))
            if ($request->image_ar[0]) {
                if ($blog->image_ar)
                    deleteImg($blog->image_ar);

                $inputs['image_ar'] = upload_img_resize($request->image_ar[0], 'photos/', 1920, 700);
                
            }

        if (isset($request->image_en[0]))
            if ($request->image_en[0]) {
                if ($blog->image_en)
                    deleteImg($blog->image_en);

                $inputs['image_en'] = upload_img_resize($request->image_en[0], 'photos/', 1920, 700);
                
            }



   





        $blog->update($inputs);
     


        alert()->success(__('Blog.done') . __('Blog.edit'))->autoclose(5000);


        return redirect(route('dashboard.blog.edit', $blog->id));
        return response()->json(['status' => true, 'url' => route('dashboard.blog.edit', $blog->id)], 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if($blog->image)
        deleteImg($blog->image);
 
     
        
        $blog->delete();
        alert()->success( __('Blog.done').__('Blog.delete'))->autoclose(5000);
        return redirect( route('dashboard.blog.index'));
    }
}
