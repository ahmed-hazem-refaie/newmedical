<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ourwork;
use Illuminate\Http\Request;

class OurworkController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $ourwork = Ourwork::all();
       return view('admin.ourwork.index',['items'=>$ourwork]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {


       $ourwork = Ourwork::all();
       
       return view('admin.ourwork.create',['blogs'=>$ourwork]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {

    
    $validate = [
        'type'=>'required|in:1,2',
        'image.*'=>'required|image|dimensions:min_width=600,min_height=600,max_width=2000,max_height=2000',
        'title_1'=>'required|string|min:4|max:45',
        'title_2'=>'required|string|min:4|max:45',
        'description'=>'required',
        'video'=>'nullable|mimes:mp4,ogx,oga,ogv,ogg,webm',
        'image'=>'required',
        'pre_info'=>'required|string|max:180',

        'info_image'=>'required',
        'info_description'=>'required',
        'info_image.*'=>'required|image|dimensions:min_width=1080,min_height=550,max_width=3000,max_height=3000',


        ] ;
    // $validate['link']  = ['required' ,function ($attribute , $value , $fail)
    // {
    //     if(strpos($value, "www.youtube.com/watch?v=") == false  || strpos($value, "https://player.vimeo.com/video/") == false )
    //     $fail('youtube  or vimeo link is invalid it must copy from browser refered to video src');
    // }];


    $messages = [
        'image.*.*'=>'required image with dimensions:min_width=600  ,min_height=600  ,max_width=2000,  max_height=2000',
        'image.*.dimensions'=>'required image with dimensions:min_width=600  ,min_height=600  ,max_width=2000,  max_height=2000',

    ]; 
    $this->validate($request , $validate , $messages);


        $inputs=$request->all();
       if ($request->image){
        $inputs['image']=upload_img_resize($request->image[0],'photos/',600 ,600);
        $inputs['icon']=upload_img_resize($request->image[0],'photos/',180 ,100);
    }

    if ( isset($request->info_image[0])){
        // $inputs['info_image']=upload_img_resize($request->info_image[0],'photos/',1230 ,680);
        $inputs['info_image']=uploaderOne($request->info_image[0] );

    }
       if ($request->file('video')){
        $inputs['video']=uploaderOne($request->video , 'videos');

         }    
        

  
   
         $all_work = null ; 
         if(is_array($request->workcategory))
         if(count($request->workcategory))
         {
            foreach ($request->workcategory as $key => $value) {
                $myid=$value;
                $all_work = ','.$all_work.$myid.',' ;
            }
         }

         $inputs['workcategory']= $all_work;

         $ourwork  = Ourwork::create($inputs);

            
            

        alert()->success( __('ourwork.done').__('ourwork.add'))->autoclose(5000);

        return redirect(route('dashboard.ourwork.index'));
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Feature  $ourwork
    * @return \Illuminate\Http\Response
    */
   public function show(Ourwork $ourwork)
   {



       dd($ourwork);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Feature  $ourwork
    * @return \Illuminate\Http\Response
    */
   public function edit(Ourwork $ourwork)
   {

 
       return view('admin.ourwork.edit',['item'=>$ourwork]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Feature  $ourwork
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Ourwork $ourwork)
   {

    // dd($request->all());

    $validate = [
        'type'=>'required|in:1,2',
        'image.*'=>'required|image|dimensions:min_width=600,min_height=600,max_width=2000,max_height=2000',
        'title_1'=>'required|string|min:4|max:45',
        'title_2'=>'required|string|min:4|max:45',
        'description'=>'required',
        'video'=>'nullable|mimes:mp4,ogx,oga,ogv,ogg,webm',
        'link'=>'nullable',
        'info_description'=>'required|string',
        'pre_info'=>'required|string|max:180',

        'info_image.*'=>'required|image|dimensions:min_width=1220,min_height=680,max_width=3000,max_height=3000',

        // 'link'=>[   "regex:/https:\/\/(?:www.)?(?:(vimeo).com\/(.*)|(youtube).com\/watch\?v=(.*?)&)/"]
    ] ;

    $messages = [
        'image.*.*'=>'required image with dimensions:min_width=600  ,min_height=600  ,max_width=2000,  max_height=2000',

    ]; 


        if( ($request->type == 1 )&& ($ourwork->video == null) )
        {
            $validate['video'] = $validate['video']."|required";
            $messages['video.*'] = 'Video Is Empty ,You Shoulf Upload Video' ;
        }


        if( ($request->type == 2 )&& ($ourwork->link == null) )
        {
            $validate['link'] = "required";
            $messages['link.*'] = 'video link Is Empty ,You Shoulf Upload Video' ;
        }


        
    $this->validate($request , $validate , $messages);

    



       
       $inputs=$request->all();

       if ($request->image){
           if($ourwork->image)
           deleteImg($ourwork->image);

           $inputs['image']=upload_img_resize($request->image[0] , 'photos/',600 , 600);
           $inputs['icon']=upload_img_resize($request->image[0] , 'photos/',180 , 100);
           
       }


       if (isset( $request->info_image[0] )){
        if($ourwork->info_image)
        deleteImg($ourwork->info_image);

        $inputs['info_image']=uploaderOne($request->info_image[0] );

        // $inputs['info_image']=upload_img_resize($request->info_image[0] , 'photos/',1230 , 680);

        
    }
   

       if ($request->file('video')){
        $inputs['video']=uploaderOne($request->video , 'videos');

         }    
       
   

       
         $ourwork->update($inputs);
         $all_work = null ; 
         
         if(is_array($request->workcategory))
         if(count($request->workcategory))
         {
            foreach ($request->workcategory as $key => $value) {
                $myid=$value;
                $all_work = ','.$all_work.$myid.',' ;
            }
         }
  
         $ourwork->workcategory = $all_work ;
         $ourwork->save();
       
       alert()->success( __('ourwork.done').__('ourwork.edit'))->autoclose(5000);
       return redirect( route('dashboard.ourwork.edit',$ourwork->id));
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Feature  $ourwork
    * @return \Illuminate\Http\Response
    */
   public function destroy(Partner $ourwork)
   {
       if($ourwork->image)
       deleteImg($ourwork->image);
       

       
       $ourwork->delete();
       alert()->success( __('ourwork.done').__('ourwork.delete'))->autoclose(5000);
       return redirect( route('dashboard.ourwork.index'));
   }
}

