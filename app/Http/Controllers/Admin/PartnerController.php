<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $partners = Partner::all();
       return view('admin.partner.index',['items'=>$partners]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {


       $partners = Partner::all();
       
       return view('admin.partner.create',['blogs'=>$partners]);
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

        'image'=>"required",
        'image.*'=>'required|array',
        'image.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',
        'name'=>'required|string|min:4|max:45',
        'url'=>'required',
        'description'=>'nullable|string|min:60|max:210',]
    ,[
        'image'=>'image required',
        'image.*.*'=>'dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',]);
    

        $inputs=$request->all();
       if ($request->image){
       $inputs['image']=upload_img_resize($request->image[0] , 'photos/' ,105 , 125);

         }    

  
   



    $partner  = Partner::create($inputs);

    
    

   alert()->success( __('partner.done').__('partner.add'))->autoclose(5000);

   return redirect(route('dashboard.partner.index'));
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Feature  $partner
    * @return \Illuminate\Http\Response
    */
   public function show(Partner $partner)
   {



       dd($partner);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Feature  $partner
    * @return \Illuminate\Http\Response
    */
   public function edit(Partner $partner)
   {

    
       return view('admin.partner.edit',['item'=>$partner]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Feature  $partner
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Partner $partner)
   {

    $this->validate($request , [

        'image.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',
        'name'=>'required|string|min:4|max:45',
        'url'=>'required',
        'description'=>'nullable|string|min:60|max:210',]
    ,['image.*.*'=>'dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',]);
    
       
       $inputs=$request->all();
       if ($request->image){
           if($partner->image)
           deleteImg($partner->image);

           $inputs['image']=upload_img_resize($request->image[0] , 'photos/' ,105 , 125);
        }
   

       
   

       
       $partner->update($inputs);
  
       
       alert()->success( __('partner.done').__('partner.edit'))->autoclose(5000);
       return redirect( route('dashboard.partner.edit',$partner->id));
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Feature  $partner
    * @return \Illuminate\Http\Response
    */
   public function destroy(Partner $partner)
   {
       if($partner->image)
       deleteImg($partner->image);
       

       
       $partner->delete();
       alert()->success( __('partner.done').__('partner.delete'))->autoclose(5000);
       return redirect( route('dashboard.partner.index'));
   }
}

