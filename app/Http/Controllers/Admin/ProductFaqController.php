<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductFaq;
use Illuminate\Http\Request;

class ProductFaqController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(Product $product)
   {
       
       $productfaqs = $product->faq;

       return view('admin.productfaq.index',['items'=>$productfaqs , 'parent'=>$product]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(Product $product)
   {
       
       return view('admin.productfaq.create',['parent'=>$product]);
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



        
        

        'title'=>'required|string|min:4|max:170',


        'description'=>'required|string|min:3|max:250',
        ]
    );
    

    
        


        $inputs=$request->all();

 

        $productfaq  = $product->faq()->create($inputs);

    
    

   alert()->success( __('productfaq.done').__('productfaq.add'))->autoclose(5000);

   return redirect(route('dashboard.product.productfaq.index',[$product->id]));
   return response()->json(['status'=>true , 'url'=>route('dashboard.productfaq.index')], 200) ;
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Feature  $productfaq
    * @return \Illuminate\Http\Response
    */
   public function show( Product $product , ProductFaq $productfaq)
   {



       dd($productfaq);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Feature  $productfaq
    * @return \Illuminate\Http\Response
    */
   public function edit(Product $product , ProductFaq $productfaq)
   {

    
       return view('admin.productfaq.edit',['item'=>$productfaq , 'parent'=>$product]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Feature  $productfaq
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request,product $product,  ProductFaq $productfaq)
   {

    // dd($request->all());
    $validator = $this->validate($request , [


        'title'=>'required|string|min:4|max:45',


        'description'=>'nullable|string|min:3|max:210',
        ]
    );
     

        $inputs=$request->all();



       $productfaq->update($inputs);
  
       
       alert()->success( __('productfaq.done').__('productfaq.edit'))->autoclose(5000);
       
       
       return redirect( route('dashboard.product.productfaq.edit',[$product->id , $productfaq->id]));
       return response()->json(['status'=>true , 'url'=>route('dashboard.productfaq.edit',$productfaq->id)], 200) ;
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Feature  $productfaq
    * @return \Illuminate\Http\Response
    */
   public function destroy(Product $product , ProductFaq $productfaq)
   {


       
       $productfaq->delete();
       alert()->success( __('productfaq.done').__('productfaq.delete'))->autoclose(5000);
       return redirect( route('dashboard.product.productfaq.index' , $product->id));
   }
}
