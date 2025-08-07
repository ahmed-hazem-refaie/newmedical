<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $Services = Service::all();
       return view('admin.service.index',['items'=>$Services]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {       
       return view('admin.service.create',[]);
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
        $this->validate($request , [


        'image_ar'=>'required|array',
        // 'image_ar.*'=>'required|image|dimensions:min_width=1900,min_height=600,max_width=2080,max_height=1280',


        'image_en'=>'required|array',
        // 'image_en.*'=>'required|image|dimensions:min_width=1900,min_height=600,max_width=2080,max_height=1280',





        'name_ar'=>'required|string|min:4|max:255',
        'name_en'=>'required|string|min:4|max:255',
        'info_ar'=>'required|string|min:4|max:3000',
        'info_en'=>'required|string|min:4|max:3000',

        


        ]
    ,[
        'image_ar'=>'image required',
        'image_ar.*.*'=>'-dimensions-min=500,min_height=500,max_width=2080,max_height=2080',
        

        'image_en'=>'image required',
        'image_en.*.*'=>'-dimensions-min=500,min_height=500,max_width=2080,max_height=2080',
        
   
    
        
        ]);
    

        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()->all(), 'status' => false], 200);
        // } 
       


        $inputs=$request->all();

       if ($request->image_ar)
       {
        $inputs['image_ar']=upload_img_resize($request->image_ar[0] , 'photos/' ,1920 , 700);

       }   
       
       if ($request->image_en)
       {
        $inputs['image_en']=upload_img_resize($request->image_en[0] , 'photos/' ,1920 , 700);

       }   


       if ($request->pdf)
       {


           $inputs['pdf']=uploaderOne($request->pdf ,'pdf');


       }   
  
   



    $Service  = Service::create($inputs);

    
    

   alert()->success( __('Service.done').__('Service.add'))->autoclose(5000);

   return redirect(route('dashboard.service.index'));
   return response()->json(['status'=>true , 'url'=>route('dashboard.service.index')], 200) ;
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Feature  $Service
    * @return \Illuminate\Http\Response
    */
   public function show(Service $Service)
   {



       dd($Service);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Feature  $Service
    * @return \Illuminate\Http\Response
    */
   public function edit(Service $Service)
   {

    
       return view('admin.service.edit',['item'=>$Service]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Feature  $Service
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Service $Service)
   {

    $this->validate($request , [


        'image_ar.*'=>'nullable|image|dimensions:min_width=1900,min_height=1000,max_width=2080,max_height=1280',


        'image_en.*'=>'nullable|image|dimensions:min_width=1900,min_height=1000,max_width=2080,max_height=1280',





        


        ]
    ,[
        'image_ar'=>'image required',
        'image_ar.*.*'=>'-dimensions-min=1920,min_height=1080,max_width=2080,max_height=1280',
        

        'image_en'=>'image required',
        'image_en.*.*'=>'-dimensions-min=1920,min_height=1080,max_width=2080,max_height=1280',
        
   
    
        
        ]);
        

        $inputs=$request->all();


        if(isset($request->image_ar[0]))
       if ($request->image_ar[0]){
        if($Service->image_ar)
        deleteImg($Service->image_ar);

        $inputs['image_ar']=upload_img_resize($request->image_ar[0] , 'photos/' ,1920 , 700);
        // $inputs['image']=uploaderOne($request->image[0]);
        }

        if(isset($request->image_en[0]))
        if ($request->image_en[0]){
         if($Service->image_en)
         deleteImg($Service->image_en);
 
         $inputs['image_en']=upload_img_resize($request->image_en[0] , 'photos/' ,1920 , 700);
         // $inputs['image']=uploaderOne($request->image[0]);
         }
 
        

         if ($request->pdf )
         {
  
            if ($Service->pdf )
          deleteImg($Service->pdf);
  
             $inputs['pdf']=uploaderOne($request->pdf ,'pdf');
  
  
         }   
   

       
   
     
         $Service->update($inputs);
        //  dd($request->all(), $Service);
  
       
       alert()->success( __('Service.done').__('Service.edit'))->autoclose(5000);
       
       
       return redirect( route('dashboard.service.edit',$Service->id));
       return response()->json(['status'=>true , 'url'=>route('dashboard.service.edit',$Service->id)], 200) ;
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Feature  $Service
    * @return \Illuminate\Http\Response
    */
   public function destroy(Service $Service)
   {
       if($Service->image)
       deleteImg($Service->image);

       if($Service->logo)
       deleteImg($Service->logo);

       if($Service->header_image)
       deleteImg($Service->header_image);
       

       
       $Service->delete();
       alert()->success( __('Service.done').__('Service.delete'))->autoclose(5000);
       return redirect( route('dashboard.service.index'));
   }
}
