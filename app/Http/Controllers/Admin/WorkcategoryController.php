<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Workcategory;
use Illuminate\Http\Request;

class WorkcategoryController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $workcategory = Workcategory::all();
       return view('admin.workcategory.index',['items'=>$workcategory]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {


       $workcategory = Workcategory::all();
       
       return view('admin.workcategory.create',['blogs'=>$workcategory]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {


    $this->validate($request , [

        // 'image.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width500,max_height=600',
        'name'=>'required|string|min:2|max:45',
        // 'url'=>'required',
        'description'=>'nullable|string|min:6|max:210',
    ]);


        $inputs=$request->all();
       if ($request->image){
       $inputs['image']=uploaderOne($request->image[0]);

         }    

  
   



    $workcategory  = Workcategory::create($inputs);

    
    

   alert()->success( __('workcategory.done').__('workcategory.add'))->autoclose(5000);

   return redirect(route('dashboard.workcategory.index'));
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Feature  $workcategory
    * @return \Illuminate\Http\Response
    */
   public function show(Workcategory $workcategory)
   {



       dd($workcategory);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Feature  $workcategory
    * @return \Illuminate\Http\Response
    */
   public function edit(Workcategory $workcategory)
   {

    
       return view('admin.workcategory.edit',['item'=>$workcategory]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Feature  $workcategory
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Workcategory $workcategory)
   {

    $this->validate($request , [

        'name'=>'required|string|min:4|max:45',
        'description'=>'nullable|string|min:60|max:210',
    ]);
    
       
       $inputs=$request->all();
       if ($request->image){
           if($workcategory->image)
           deleteImg($workcategory->image);

           $inputs['image']=uploaderOne($request->image[0]);
       }
   

       
   

       
       $workcategory->update($inputs);
  
       
       alert()->success( __('workcategory.done').__('workcategory.edit'))->autoclose(5000);
       return redirect( route('dashboard.workcategory.edit',$workcategory->id));
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Feature  $workcategory
    * @return \Illuminate\Http\Response
    */
   public function destroy(Workcategory $workcategory)
   {

    

       
       $workcategory->delete();
       alert()->success( __('workcategory.done').__('workcategory.delete'))->autoclose(5000);
       return redirect( route('dashboard.workcategory.index'));
   }
}
