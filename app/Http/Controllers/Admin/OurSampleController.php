<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurSample;
use Illuminate\Http\Request;

class OurSampleController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $oursample = OurSample::all();
       return view('admin.oursample.index',['items'=>$oursample]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {



    
       return view('admin.oursample.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {


        $inputs=$request->all();


        $this->validate($request , [

            'image.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width700,max_height=700',
            'title'=>'required|string|min:4|max:45',
            'description'=>'required|string|min:60|max:210',
        ]);
       if ($request->image){
       $inputs['image']=uploaderOne($request->image[0]);

         }    

  
   



    $oursample  = OurSample::create($inputs);

    
    

   alert()->success( __('oursample.done').__('oursample.add'))->autoclose(5000);

   return redirect(route('dashboard.oursample.index'));
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Feature  $oursample
    * @return \Illuminate\Http\Response
    */
   public function show(OurSample $oursample)
   {



       dd($oursample);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Feature  $oursample
    * @return \Illuminate\Http\Response
    */
   public function edit(OurSample $oursample)
   {

    
       return view('admin.oursample.edit',['item'=>$oursample]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Feature  $oursample
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, OurSample $oursample)
   {

       
    $this->validate($request , [

        'image.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width700,max_height=700',
        'title'=>'required|string|min:4|max:45',
        'description'=>'required|string|min:60|max:210',
    ]);


       $inputs=$request->all();
       if ($request->image){
           if($oursample->image)
           deleteImg($oursample->image);

           $inputs['image']=uploaderOne($request->image[0]);
       }
   

       
   

       
       $oursample->update($inputs);
  
       
       alert()->success( __('oursample.done').__('oursample.edit'))->autoclose(5000);
       return redirect( route('dashboard.oursample.edit',$oursample->id));
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Feature  $oursample
    * @return \Illuminate\Http\Response
    */
   public function destroy(OurSample $oursample)
   {
       if($oursample->image)
       deleteImg($oursample->image);
       

       
       $oursample->delete();
       alert()->success( __('oursample.done').__('oursample.delete'))->autoclose(5000);
       return redirect( route('dashboard.oursample.index'));
   }
}
