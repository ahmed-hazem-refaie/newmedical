<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductMedia;
use Illuminate\Http\Request;

class ProductMediaController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(Product $product)
   {
       
       $productmedias = $product->media;

       return view('admin.productmedia.index',['items'=>$productmedias , 'parent'=>$product]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(Product $product)
   {
       
       return view('admin.productmedia.create',['parent'=>$product]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request , Product $product)
   {

    $this->validate($request , [




        'image.*'=>'required|image|dimensions:min_width=500,min_height=500,max_width2080,max_height=2080',

        'image'=>'required',
        'video'=>'required_if:type,==,0|mimes:mp4,ogx,oga,ogv,ogg,webm',

        
        'type'=>'required',        
        'description'=>'nullable|string|min:8|max:2050',

        ] ,[
        
        'link.*'=>'link required with link media selection',
        'video.*'=>'video required with video media selection',
        'image.*.*'=>'Image Dimention Error Image should Be in this values  min_width=600   min_height=650   max_width1000   max_height=1080 ']);

    

    
        $inputs=$request->all();

        if ( isset($request->image[0])) {

                $inputs['image'] = uploaderOne($request->image[0] , 'photos/' );
            }

        if ($request->video) {
    
            

            $inputs['video'] = uploaderOne($request->video,'videos');
        }


 

        $productmedia  = $product->media()->create($inputs);

    
    

   alert()->success( __('productmedia.done').__('productmedia.add'))->autoclose(5000);

   return redirect(route('dashboard.product.productmedia.index',[$product->id]));
   return response()->json(['status'=>true , 'url'=>route('dashboard.productmedia.index')], 200) ;
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Feature  $productmedia
    * @return \Illuminate\Http\Response
    */
   public function show( Product $product , Productmedia $productmedia)
   {



       dd($productmedia);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Feature  $productmedia
    * @return \Illuminate\Http\Response
    */
   public function edit(Product $product , Productmedia $productmedia)
   {

    
       return view('admin.productmedia.edit',['item'=>$productmedia , 'parent'=>$product]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Feature  $productmedia
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request,product $product,  Productmedia $productmedia)
   {

    // dd($request->all());
    $validator = $this->validate($request , [


        'image.*'=>'required|image|dimensions:min_width=500,min_height=500,max_width2080,max_height=2080',

        'video'=>'nullable|mimes:mp4,ogx,oga,ogv,ogg,webm',

        'type'=>'required',        


        'description'=>'required|string|min:3|max:350',
        ]
    );
     

        $inputs=$request->all();

        if ( isset($request->image[0])) {
            if ($productmedia->image)
                deleteImg($productmedia->image);

                $inputs['image'] = upload_img_resize($request->image[0] , 'photos/' , 600 ,490);
            }

        if ($request->video) {
            if ($productmedia->video)
                deleteImg($productmedia->video , 'videos');

            $inputs['video'] = uploaderOne($request->video , 'videos');
        }

       $productmedia->update($inputs);
  
       
       alert()->success( __('productmedia.done').__('productmedia.edit'))->autoclose(5000);
       
       
       return redirect( route('dashboard.product.productmedia.edit',[$product->id , $productmedia->id]));
       return response()->json(['status'=>true , 'url'=>route('dashboard.productmedia.edit',$productmedia->id)], 200) ;
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Feature  $productmedia
    * @return \Illuminate\Http\Response
    */
   public function destroy(Product $product , Productmedia $productmedia)
   {


       
       $productmedia->delete();
       alert()->success( __('productmedia.done').__('productmedia.delete'))->autoclose(5000);
       return redirect( route('dashboard.product.productmedia.index' , $product->id));
   }
}

