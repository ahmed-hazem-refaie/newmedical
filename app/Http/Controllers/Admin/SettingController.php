<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use App\Models\SettingField;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $settings = setting::all();
       return view('admin.setting.index',['items'=>$settings]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {


       $settings = Setting::all();
       
       return view('admin.setting.create',['settings'=>$settings]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(SettingRequest $request)
   {
       $inputs=$request->all();
 
   setting::create($inputs);
   alert()->success( __('setting.done').__('setting.add'))->autoclose(5000);

   return redirect(route('dashboard.setting.index'));
   }

      /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function storevalue(Request $request)
    {
        
        $inputsfields=$request->all();

        $admin_inputs = filter_by_key_prefix($request->all() , 'field_',true);
        $inputs  = Setting::with('fields')->findOrFail($request->setting_id);
        $inputs = $inputs->fields ;
        $validate =[];
        $message =[];
        $inputsfieldskeys = array_keys($admin_inputs);
        // ['1'=>__('settingfields.texttype'),'5'=>__('settingfields.number'),'2'=>__('settingfields.textarea'),'3'=>__('settingfields.image'),'4'=>__('settingfields.video')]
        foreach ($inputs as $key => $value) {

            if($value->type == 1   )
            {
                $validate['field_'.$value->id]  = 'nullable|string';
                $message['field_'.$value->id.".*"]  = $value->name .__('settingfields.texttype_error');
                $message['field_'.$value->id.".*"]  = $value->name .'  '.$value->validation_msg;

            }
            if($value->type == 2 )
            {
                $validate['field_'.$value->id]  = 'nullable|string';
                $message['field_'.$value->id.".*"]  = $value->name .__('settingfields.textarea_error');
                $message['field_'.$value->id.".*"]  = $value->name .'  '.$value->validation_msg;

            }
            if($value->type == 3 )
            {

                
                $validate['field_'.$value->id]  = 'nullable|image';

                if($value->validation)
                // $validate['field_'.$value->id] = $validate['field_'.$value->id] . $value->validation ; 
                $message['field_'.$value->id.".*"]  = $value->name .'  '.$value->validation_msg;


            }


            if($value->type == 33 )
            {

                
                $validate['field_'.$value->id]  = 'nullable|image';

                if($value->validation)
                // $validate['field_'.$value->id] = $validate['field_'.$value->id] . $value->validation ; 
                $message['field_'.$value->id.".*"]  = $value->name .'  '.$value->validation_msg;


            }



            if($value->type == 4)
            {

                $validate['field_'.$value->id]  = 'nullable|mimes:mp4,ogx,oga,ogv,ogg,webm';
                $message['field_'.$value->id.".*"]  = $value->name .__('settingfields.video_error');
                $message['field_'.$value->id.".*"]  = $value->name .'  '.$value->validation_msg;


            }

            if($value->type == 5 )
            {

                $validate['field_'.$value->id]  = 'nullable|image';
                $message['field_'.$value->id.".*"]  = $value->name .__('settingfields.number_error');
                $message['field_'.$value->id.".*"]  = $value->name .'  '.$value->validation_msg;


            }

            if($value->type == 7 )
            {

                $validate['field_'.$value->id]  = ['nullable' ,function ($attribute , $value , $fail)
                {
                    if(strpos($value, "www.youtube.com/watch?v=") == false)
                    $fail('youtube link is invalid it must copy from browser link');
                }];
                $message['field_'.$value->id.".*"]  = $value->name .__('settingfields.youtube_error');

            }



            if($value->validation && ($value->type != 7))
            $validate['field_'.$value->id] = $validate['field_'.$value->id] . $value->validation ; 

            
        }


        
        // dd( $validate);

        $this->validate($request , $validate , $message);

        // dd($request->all());
        foreach ($admin_inputs as $key => $value) {

            $field = $inputs->where('id',$key)->first();
            if(!$field || !$value)
            continue;

            if($field->type == 1 || $field->type == 2 || $field->type == 5  || $field->type == 9 || $field->type == 8 ||$field->type == 10 )
            {
                $field->value = $value ;

            }

            if($field->type == 3 )
            {

                if($imgval  =$field->value)
                {
                    deleteImg($imgval);

                }

                // dd($value , $field->dim1 , $field->dim2);
                // $field->value = uploaderOne($value);
                $field->value = upload_img_resize($value ,  'photos/' , intval($field->dim1) , intval($field->dim2 ));


                

            }

            if($field->type == 33 )
            {

                if($imgval  =$field->value)
                {
                    deleteImg($imgval);

                }

                // dd($value , $field->dim1 , $field->dim2);
                // $field->value = uploaderOne($value);
                $field->value = uploaderOne($value );


                

            }

            if($field->type == 4)
            {

                if($imgval  =$field->value)
                {
                    deleteImg($imgval , 'videos');

                }
                // value == $request->file('name') , 
                
                $field->value = uploaderOne($value ,  'videos');

                

            }

            if($field->type == 7)
            {

      
                
            if(strpos($value, "www.youtube.com/watch?v=") !== false) {
                        $link = preg_split("!&!", $value);
                        $link = explode("v=", $link[0]);
                        // $value = preg_replace("!watch\?v=!", "embed/", $link[0]);
                        $value = '<iframe
                        class="w-100" style="height: 100vh; background:black;position: absolute; "
                        src="https://www.youtube.com/embed/'.$link[1].'?autoplay=1&mute=1&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; mute" allowfullscreen>
                        </iframe>';

                        $field->value = $value ;
            }


            }


            $field->save();

        }

        alert()->success( __('setting.done').__('setting.edit'))->autoclose(5000);

        return redirect()->back();
    }

    
   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Feature  $setting
    * @return \Illuminate\Http\Response
    */
   public function show( $setting)
   {

    $setting_with =$setting ; 
    $settings = Setting::with('fields')->where('name_en',$setting)->firstOrFail();

    return view('admin.setting',compact('settings','setting_with'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Feature  $setting
    * @return \Illuminate\Http\Response
    */
   public function edit(setting $setting)
   {

       $setting = $setting;
       return view('admin.setting.edit',['item'=>$setting]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Feature  $setting
    * @return \Illuminate\Http\Response
    */
   public function update(settingRequest $request, setting $setting)
   {

       
       $inputs=$request->all();
       $setting->update($inputs);

       alert()->success( __('setting.done').__('setting.edit'))->autoclose(5000);
       return redirect( route('dashboard.setting.edit',$setting->id));
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Feature  $setting
    * @return \Illuminate\Http\Response
    */
   public function destroy(setting $setting)
   {

       $setting->delete();
       alert()->success( __('setting.done').__('setting.delete'))->autoclose(5000);
       return redirect( route('dashboard.setting.index'));
   }
}
