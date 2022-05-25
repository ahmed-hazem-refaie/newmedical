<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $Departments = Department::all();
       return view('admin.department.index',['items'=>$Departments]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {       
       return view('admin.department.create',[]);
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
        'image_ar.*'=>'required|image|dimensions:min_width=1200,min_height=900,max_width=2080,max_height=1280',


        'image_en'=>'required|array',
        'image_en.*'=>'required|image|dimensions:min_width=1200,min_height=900,max_width=2080,max_height=1280',





        'name_ar'=>'required|string|min:4|max:200',
        'name_en'=>'required|string|min:4|max:200',
        'info_ar'=>'required|string|min:4|max:200',
        'info_en'=>'required|string|min:4|max:200',
        'info_en'=>'required|string|min:4|max:200',

        


        ]
    ,[
        'image_ar'=>'image required',
        'image_ar.*.*'=>'-dimensions-min=1920,min_height=600,max_width=2080,max_height=1280',
        

        'image_en'=>'image required',
        'image_en.*.*'=>'-dimensions-min=1200,min_height=900,max_width=2080,max_height=1280',
        
   
    
        
        ]);
    

        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()->all(), 'status' => false], 200);
        // } 
       


        $inputs=$request->all();

       if ($request->image_ar)
       {
        $inputs['image_ar']=upload_img_resize($request->image_ar[0] , 'photos/' ,1200 , 900);

       }   
       
       if ($request->image_en)
       {
        $inputs['image_en']=upload_img_resize($request->image_en[0] , 'photos/' ,1200 , 900);

       }   


       if ($request->pdf)
       {


           $inputs['pdf']=uploaderOne($request->pdf ,'pdf');


       }   
  
   



    $Department  = Department::create($inputs);

    
    

   alert()->success( __('Department.done').__('Department.add'))->autoclose(5000);

   return redirect(route('dashboard.department.index'));
   return response()->json(['status'=>true , 'url'=>route('dashboard.department.index')], 200) ;
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Feature  $Department
    * @return \Illuminate\Http\Response
    */
   public function show(Department $Department)
   {



       dd($Department);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Feature  $Department
    * @return \Illuminate\Http\Response
    */
   public function edit(Department $Department)
   {

    
       return view('admin.department.edit',['item'=>$Department]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Feature  $Department
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Department $Department)
   {

    $this->validate($request , [


        'image_ar.*'=>'nullable|image|dimensions:min_width=1200,min_height=900,max_width=2080,max_height=1280',


        'image_en.*'=>'nullable|image|dimensions:min_width=1200,min_height=900,max_width=2080,max_height=1280',





        


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
        if($Department->image_ar)
        deleteImg($Department->image_ar);

        $inputs['image_ar']=upload_img_resize($request->image_ar[0] , 'photos/' ,1920 , 700);
        // $inputs['image']=uploaderOne($request->image[0]);
        }

        if(isset($request->image_en[0]))
        if ($request->image_en[0]){
         if($Department->image_en)
         deleteImg($Department->image_en);
 
         $inputs['image_en']=upload_img_resize($request->image_en[0] , 'photos/' ,1920 , 700);
         // $inputs['image']=uploaderOne($request->image[0]);
         }
 
        

         if ($request->pdf )
         {
  
            if ($Department->pdf )
          deleteImg($Department->pdf);
  
             $inputs['pdf']=uploaderOne($request->pdf ,'pdf');
  
  
         }   
   

       
   
     
         $Department->update($inputs);
        //  dd($request->all(), $Department);
  
       
       alert()->success( __('Department.done').__('Department.edit'))->autoclose(5000);
       
       
       return redirect( route('dashboard.department.edit',$Department->id));
       return response()->json(['status'=>true , 'url'=>route('dashboard.department.edit',$Department->id)], 200) ;
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Feature  $Department
    * @return \Illuminate\Http\Response
    */
   public function destroy(Department $Department)
   {
       if($Department->image)
       deleteImg($Department->image);

       if($Department->logo)
       deleteImg($Department->logo);

       if($Department->header_image)
       deleteImg($Department->header_image);
       

       
       $Department->delete();
       alert()->success( __('Department.done').__('Department.delete'))->autoclose(5000);
       return redirect( route('dashboard.department.index'));
   }
}
