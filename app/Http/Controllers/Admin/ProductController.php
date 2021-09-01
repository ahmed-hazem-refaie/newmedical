<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(MainCategory $maincategory)
   {
       
       $products = $maincategory->product;

       return view('admin.product.index',['items'=>$products , 'parent'=>$maincategory]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(MainCategory $maincategory)
   {
       
       return view('admin.product.create',['parent'=>$maincategory]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request , MainCategory $maincategory)
   {

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

        
        'name'=>'required|string|min:4|max:45',
        'title'=>'required|string|min:4|max:45',

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

  
   



    $product  = $maincategory->product()->create($inputs);

    
    

   alert()->success( __('product.done').__('product.add'))->autoclose(5000);

   return redirect(route('dashboard.maincategory.product.index',[$maincategory->id]));
   return response()->json(['status'=>true , 'url'=>route('dashboard.product.index')], 200) ;
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Feature  $product
    * @return \Illuminate\Http\Response
    */
   public function show( MainCategory $maincategory , Product $product)
   {



       dd($product);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Feature  $product
    * @return \Illuminate\Http\Response
    */
   public function edit(MainCategory $maincategory , Product $product)
   {

    
       return view('admin.product.edit',['item'=>$product , 'parent'=>$maincategory]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Feature  $product
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request,MainCategory $maincategory,  Product $product)
   {

    // dd($request->all());
    $validator = $this->validate($request , [



        // 'image.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',



        // 'logo.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',



        // 'header_image.*'=>'required|image|dimensions:min_width=200,min_height=250,max_width1080,max_height=1080',

        
        'name'=>'required|string|min:4|max:45',
        'title'=>'required|string|min:4|max:45',

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
        if($product->image)
        deleteImg($product->image);

        // $inputs['image']=upload_img_resize($request->image[0] , 'photos/' ,105 , 125);
        $inputs['image']=uploaderOne($request->image[0]);
        }

        if(isset($request->logo[0]))
        if ($request->logo[0]){
            if($product->logo)
            deleteImg($product->logo);
 
            // $inputs['image']=upload_img_resize($request->logo[0] , 'photos/' ,105 , 125);
            $inputs['logo']=uploaderOne($request->logo[0]);
         }

         if(isset($request->header_image[0]))
         if ($request->header_image[0]){
            if($product->header_image)
            deleteImg($product->header_image);
 
            // $inputs['image']=upload_img_resize($request->logo[0] , 'photos/' ,105 , 125);
            $inputs['header_image']=uploaderOne($request->header_image[0]);
         }

   

       
   
     
       $product->update($inputs);
  
       
       alert()->success( __('product.done').__('product.edit'))->autoclose(5000);
       
       
       return redirect( route('dashboard.maincategory.product.edit',[$maincategory->id , $product->id]));
       return response()->json(['status'=>true , 'url'=>route('dashboard.product.edit',$product->id)], 200) ;
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Feature  $product
    * @return \Illuminate\Http\Response
    */
   public function destroy(MainCategory $maincategory , Product $product)
   {
       if($product->image)
       deleteImg($product->image);

       if($product->logo)
       deleteImg($product->logo);

       if($product->header_image)
       deleteImg($product->header_image);
       

       
       $product->delete();
       alert()->success( __('product.done').__('product.delete'))->autoclose(5000);
       return redirect( route('dashboard.maincategory.product.index' , $maincategory->id));
   }
}