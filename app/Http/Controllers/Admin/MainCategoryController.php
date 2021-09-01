<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainCategoryController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $maincategorys = MainCategory::all();
       return view('admin.maincategory.index',['items'=>$maincategorys]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {       
       return view('admin.maincategory.create',[]);
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


        'image'=>'required|array',
        // 'image.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',
        'image.*'=>'required|image',


        'logo'=>'required|array',
        // 'logo.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',
        'logo.*'=>'required|image',


        'header_image'=>'required|array',
        'header_image.*'=>'required|image',
        // 'header_image.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',

        
        'name'=>'required|string|min:4|max:45|unique:main_categories,name',
        'title'=>'required|string|min:4|max:45|unique:main_categories,title',

        'content'=>'required|string',
        'description'=>'required|string|min:60|max:210',
        ]
    ,[
        'image'=>'image required',
        'image.*.*'=>'dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',
        
        'logo'=>'image required',
        'logo.*.*'=>'dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',
        
        'header_image'=>'image required',
        'header_image.*.*'=>'dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',
        
        
        ]);
    

        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()->all(), 'status' => false], 200);
        // } 
       


        $inputs=$request->all();

       if ($request->image)
       {
        $inputs['image']=upload_img_resize($request->image[0] , 'photos/' ,105 , 125);

       }    

       if ($request->logo)
       {

        
           $inputs['logo']=uploaderOne($request->logo[0]);

        // $inputs['logo']=upload_img_resize($request->logo[0] , 'photos/' ,105 , 125);

       }   
       
       if ($request->header_image)
       {

        
           $inputs['header_image']=uploaderOne($request->header_image[0]);

        // $inputs['header_image']=upload_img_resize($request->header_image[0] , 'photos/' ,105 , 125);

       }   

  
   



    $maincategory  = MainCategory::create($inputs);

    
    

   alert()->success( __('maincategory.done').__('maincategory.add'))->autoclose(5000);

   return redirect(route('dashboard.maincategory.index'));
   return response()->json(['status'=>true , 'url'=>route('dashboard.maincategory.index')], 200) ;
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Feature  $maincategory
    * @return \Illuminate\Http\Response
    */
   public function show(MainCategory $maincategory)
   {



       dd($maincategory);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Feature  $maincategory
    * @return \Illuminate\Http\Response
    */
   public function edit(MainCategory $maincategory)
   {

    
       return view('admin.maincategory.edit',['item'=>$maincategory]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Feature  $maincategory
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, MainCategory $maincategory)
   {

    // dd($request->all());
    $this->validate($request , [



        // 'image.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',



        // 'logo.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',



        // 'header_image.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',

        
        'name'=>'required|string|min:4|max:45|unique:main_categories,name,'.$maincategory->id,
        'title'=>'required|string|min:4|max:45|unique:main_categories,title,'.$maincategory->id,

        'content'=>'nullable|string',
        'description'=>'nullable|string|min:60|max:210',
        ]
    ,[
        'image'=>'image required',
        'image.*.*'=>'dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',
        
        'logo'=>'image required',
        'logo.*.*'=>'dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',
        
        'header_image'=>'image required',
        'header_image.*.*'=>'dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',
        
        
        ]);
    
        

        $inputs=$request->all();


        if(isset($request->image[0]))
       if ($request->image[0]){
        if($maincategory->image)
        deleteImg($maincategory->image);

        // $inputs['image']=upload_img_resize($request->image[0] , 'photos/' ,105 , 125);
        $inputs['image']=uploaderOne($request->image[0]);
        }

        if(isset($request->logo[0]))
        if ($request->logo[0]){
            if($maincategory->logo)
            deleteImg($maincategory->logo);
 
            // $inputs['image']=upload_img_resize($request->logo[0] , 'photos/' ,105 , 125);
            $inputs['logo']=uploaderOne($request->logo[0]);
         }

         if(isset($request->header_image[0]))
         if ($request->header_image[0]){
            if($maincategory->header_image)
            deleteImg($maincategory->header_image);
 
            // $inputs['image']=upload_img_resize($request->logo[0] , 'photos/' ,105 , 125);
            $inputs['header_image']=uploaderOne($request->header_image[0]);
         }

   

       
   
     
       $maincategory->update($inputs);
  
       
       alert()->success( __('maincategory.done').__('maincategory.edit'))->autoclose(5000);
       
       
       return redirect( route('dashboard.maincategory.edit',$maincategory->id));
       return response()->json(['status'=>true , 'url'=>route('dashboard.maincategory.edit',$maincategory->id)], 200) ;
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Feature  $maincategory
    * @return \Illuminate\Http\Response
    */
   public function destroy(MainCategory $maincategory)
   {
       if($maincategory->image)
       deleteImg($maincategory->image);

       if($maincategory->logo)
       deleteImg($maincategory->logo);

       if($maincategory->header_image)
       deleteImg($maincategory->header_image);
       

       
       $maincategory->delete();
       alert()->success( __('maincategory.done').__('maincategory.delete'))->autoclose(5000);
       return redirect( route('dashboard.maincategory.index'));
   }
}
