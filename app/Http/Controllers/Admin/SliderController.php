<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $Sliders = Slider::all();
       return view('admin.slider.index',['items'=>$Sliders]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {       
       return view('admin.slider.create',[]);
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
        'image_ar.*'=>'required|image|dimensions:min_width=1900,min_height=1000,max_width=2080,max_height=1280',


        'image_en'=>'required|array',
        'image_en.*'=>'required|image|dimensions:min_width=1900,min_height=1000,max_width=2080,max_height=1280',




        'sm_text_en'=>'required|string|min:4|max:200',
        'sm_text_ar'=>'required|string|min:4|max:200',
        'lg_text_ar'=>'required|string|min:4|max:200',
        'lg_text_en'=>'required|string|min:4|max:200',

        


        ]
    ,[
        'image_ar'=>'image required',
        'image_ar.*.*'=>'-dimensions-min=1920,min_height=1080,max_width=2080,max_height=1280',
        

        'image_en'=>'image required',
        'image_en.*.*'=>'-dimensions-min=1920,min_height=1080,max_width=2080,max_height=1280',
        
   
    
        
        ]);
    

        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()->all(), 'status' => false], 200);
        // } 
       


        $inputs=$request->all();

       if ($request->image_ar)
       {
        $inputs['image_ar']=upload_img_resize($request->image_ar[0] , 'photos/' ,1920 , 1080);

       }   
       
       if ($request->image_en)
       {
        $inputs['image_en']=upload_img_resize($request->image_en[0] , 'photos/' ,1920 , 1080);

       }   


  
   



    $Slider  = Slider::create($inputs);

    
    

   alert()->success( __('slider.done').__('slider.add'))->autoclose(5000);

   return redirect(route('dashboard.slider.index'));
   return response()->json(['status'=>true , 'url'=>route('dashboard.slider.index')], 200) ;
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Feature  $Slider
    * @return \Illuminate\Http\Response
    */
   public function show(Slider $Slider)
   {



       dd($Slider);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Feature  $Slider
    * @return \Illuminate\Http\Response
    */
   public function edit(Slider $Slider)
   {

    
       return view('admin.slider.edit',['item'=>$Slider]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Feature  $Slider
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Slider $Slider)
   {

    $this->validate($request , [


        'image_ar.*'=>'nullable|image|dimensions:min_width=1900,min_height=1000,max_width=2080,max_height=1280',


        'image_en.*'=>'nullable|image|dimensions:min_width=1900,min_height=1000,max_width=2080,max_height=1280',




        'sm_text_en'=>'nullable|string|min:4|max:200',
        'sm_text_ar'=>'nullable|string|min:4|max:200',
        'lg_text_ar'=>'nullable|string|min:4|max:200',
        'lg_text_en'=>'nullable|string|min:4|max:200',

        


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
        if($Slider->image_ar)
        deleteImg($Slider->image_ar);

        $inputs['image_ar']=upload_img_resize($request->image_ar[0] , 'photos/' ,1920 , 1080);
        // $inputs['image']=uploaderOne($request->image[0]);
        }

        if(isset($request->image_en[0]))
        if ($request->image_en[0]){
         if($Slider->image_en)
         deleteImg($Slider->image_en);
 
         $inputs['image_en']=upload_img_resize($request->image_en[0] , 'photos/' ,1920 , 1080);
         // $inputs['image']=uploaderOne($request->image[0]);
         }
 
        
   

       
   
     
       $Slider->update($inputs);
  
       
       alert()->success( __('Slider.done').__('Slider.edit'))->autoclose(5000);
       
       
       return redirect( route('dashboard.slider.edit',$Slider->id));
       return response()->json(['status'=>true , 'url'=>route('dashboard.Slider.edit',$Slider->id)], 200) ;
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Feature  $Slider
    * @return \Illuminate\Http\Response
    */
   public function destroy(Slider $Slider)
   {
       if($Slider->image)
       deleteImg($Slider->image);

       if($Slider->logo)
       deleteImg($Slider->logo);

       if($Slider->header_image)
       deleteImg($Slider->header_image);
       

       
       $Slider->delete();
       alert()->success( __('Slider.done').__('Slider.delete'))->autoclose(5000);
       return redirect( route('dashboard.Slider.index'));
   }
}
