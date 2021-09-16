<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrer;
use Illuminate\Http\Request;

class CarrerController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $careers = Carrer::all();
       return view('admin.carrer.index',['items'=>$careers]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {       
       return view('admin.carrer.create',[]);
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



            
        'logo'=>'required|array',
        'logo.*'=>'required|image|dimensions:min_width=28,min_height=28,max_width=500,max_height=500',

        


        'title'=>'required|string|min:4|max:45|unique:carrers,title',
        'info'=>'required|string|min:4|max:200',

        'content'=>'required|string',

        ]
    ,[
      
        
        'logo'=>'image required',
        'logo.*.*'=>'required|image|dimensionss:min_width=30,min_height=30,max_width=500,max_height=500',
        
    
        
        ]);
    

  
       


        $inputs=$request->all();

           

       if ($request->logo)
       {

        
        //    $inputs['logo']=uploaderOne($request->logo[0]);

        $inputs['logo']=upload_img_resize($request->logo[0] , 'photos/' ,75 , 75);

       }   
       

  
   



    $career  = Carrer::create($inputs);

    
    

   alert()->success( __('carrer.done').__('carrer.add'))->autoclose(5000);

   return redirect(route('dashboard.career.index'));
   return response()->json(['status'=>true , 'url'=>route('dashboard.career.index')], 200) ;
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Feature  $career
    * @return \Illuminate\Http\Response
    */
   public function show(Carrer $career)
   {



       dd($career);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Feature  $career
    * @return \Illuminate\Http\Response
    */
   public function edit(Carrer $career)
   {

    
       return view('admin.carrer.edit',['item'=>$career]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Feature  $career
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Carrer $career)
   {

    // dd($request->all());
    $this->validate($request , [




        


        'logo.*'=>'required|image|dimensions:min_width=28,min_height=28,max_width=500,max_height=500',




        
        

        'title'=>'required|string|min:4|max:45|unique:carrers,title,'.$career->id,

        'content'=>'nullable|string',

        'info'=>'required|string|min:4|max:200',

        'content'=>'required|string',        ]
    ,[

        
        

        'logo.*.*'=>'LOGO dimensions:min_width=30,min_height=30,max_width=4000,max_height=1080',
        

        
        
        
        ]);
    
        

        $inputs=$request->all();



        

        if(isset($request->logo[0]))
        if ($request->logo[0]){
            if($career->logo)
            deleteImg($career->logo);
 
            $inputs['logo']=upload_img_resize($request->logo[0] , 'photos/' ,75 , 75);
            // $inputs['logo']=uploaderOne($request->logo[0]);
         }


         

   

       
   
     
       $career->update($inputs);
  
       
       alert()->success( __('carrer.done').__('carrer.edit'))->autoclose(5000);
       
       
       return redirect( route('dashboard.career.edit',$career->id));
       return response()->json(['status'=>true , 'url'=>route('dashboard.career.edit',$career->id)], 200) ;
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Feature  $career
    * @return \Illuminate\Http\Response
    */
   public function destroy(Carrer $career)
   {

    


    if ($career->appliers->count() > 0) {
        # code...

        
        alert()->warning( "There are already canditate applied for this job vacanvy so we this vavancy can't be delete" )->autoclose(5000);

        return redirect()->back();
    }
        dd($career);

       if($career->logo)
       deleteImg($career->logo);


       

       
       $career->delete();
       alert()->success( __('carrer.done').__('carrer.delete'))->autoclose(5000);
       return redirect( route('dashboard.career.index'));
   }
}
