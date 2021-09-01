<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurRig;
use Illuminate\Http\Request;

class OurRigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourrigs = OurRig::all();
        return view('admin.ourrig.index', ['items' => $ourrigs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        return view('admin.ourrig.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    // dd($request->all());
        $this->validate($request , [

            'image.*'=>'required|image|dimensions:min_width=600,min_height=500,max_width2080,max_height=2080',
            'title'=>'required|string|min:9|max:25',
            'link'=>'required_if:type,==,1',
            'video'=>'required_if:type,==,0',
            'src_file'=>'required|file',

            'desc'=>'nullable|string|min:8|max:35',
            'content'=>'nullable|string|min:40|max:190',
        ] ,[
            
            'link.*'=>'link required with link media selection',
            'video.*'=>'video required with video media selection',
            'image.*.*'=>'Image Dimention Error Image should Be in this values  min_width=600   min_height=650   max_width1000   max_height=1080 ']);


        $inputs = $request->all();
        if ( isset($request->image[0])) {
            $inputs['image'] = upload_img_resize($request->image[0] , 'photos/' , 600 ,490);
        }

        if ($request->video) {
            $inputs['video'] = uploaderOne($request->video , 'videos');
        }

        if ($request->src_file) {
            $inputs['src_file'] = uploaderOne($request->src_file , 'files');
        }

        OurRig::create($inputs);

        alert()->success(__('ourrig.done') . __('ourrig.add'))->autoclose(5000);

        return redirect(route('dashboard.ourrig.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $ourrig
     * @return \Illuminate\Http\Response
     */
    public function show(OurRig $ourrig)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $ourrig
     * @return \Illuminate\Http\Response
     */
    public function edit(OurRig $ourrig)
    {

        return view('admin.ourrig.edit', ['item' => $ourrig]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $ourrig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurRig $ourrig)
    {




        $this->validate($request , [

            'image.*'=>'required|image|dimensions:min_width=600,min_height=650,max_width1000,max_height=1080',
            'title'=>'required|string|min:9|max:25',

            'src_file'=>'nullable|file',
            'desc'=>'nullable|string|min:10|max:40',
            'content'=>'nullable|string|min:40|max:190',
        ] ,['image.*'=>'Image Dimention Error IT Must Be in this values  min_width=600   min_height=650   max_width1000   max_height=1080 ']);

        $inputs = $request->all();
        if ( isset($request->image[0])) {
            if ($ourrig->image)
                deleteImg($ourrig->image);

                $inputs['image'] = upload_img_resize($request->image[0] , 'photos/' , 600 ,490);
            }

        if ($request->video) {
            if ($ourrig->video)
                deleteImg($ourrig->video , 'videos');

            $inputs['video'] = uploaderOne($request->video);
        }

        if ($request->src_file) {
            if ($ourrig->src_file)
                deleteImg($ourrig->src_file , 'files');

            $inputs['src_file'] = uploaderOne($request->src_file);
        }

 
        $ourrig->update($inputs);


        alert()->success(__('ourrig.done') . __('ourrig.edit'))->autoclose(5000);
        return redirect(route('dashboard.ourrig.edit', $ourrig->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $ourrig
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurRig $ourrig)
    {
        if ($ourrig->image)
            deleteImg($ourrig->image);

            if ($ourrig->video)
            deleteImg($ourrig->video , 'videos');

        $ourrig->delete();
        alert()->success(__('ourrig.done') . __('ourrig.delete'))->autoclose(5000);
        return redirect(route('dashboard.ourrig.index'));
    }
}

