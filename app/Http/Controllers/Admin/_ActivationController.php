<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ActivationController extends Controller
{
    
    public function activateanddeactive(Request $request)
    {
        
        // dd(232 , $request->all(),$request->modelname,class_exists($request->modelname));
        $model = $request->modelname;
        if(class_exists($model) )
        {
            
           $object     =  $model::findOrFail($request->modelid);

          if( Schema::hasColumn($object->getTable(), 'status'))
          {
            $status  = $object->status ; 
            
            if($status)
               $object->status  = 0 ;

            if(!$status)
                $object->status  = 1 ;
            $object->save();
            
            alert()->success( __('application.done').__('application.delete'))->autoclose(5000);

          }else
          alert()->error( __('application.done').__('application.delete'))->autoclose(5000);


        }else{

            alert()->error( __('application.done').__('application.delete'))->autoclose(5000);

        }
        return redirect()->back();

        // class_exists($widget_class)
    }


    // public function orderchangemodel(Request $request)
    // {



    //     $model = $request->modelname;
    //     if(class_exists($model) )
    //     {

    //         $modelid =$model::findOrFail (  $request->modelid ); 
    //         $tomodelid = $model::findOrFail ($request->tomodelid); 
            
    //         $modelclass = new $model () ;

    //         if( $modelid->country_application_id)
    //         {
    //             if($modelid->country_application_id != $tomodelid->country_application_id )
    //             abort(404);

    //             $modelclass = $modelclass->where('country_application_id' ,'=', $modelid->country_application_id);

    //          }

            
    //         if($modelid->order  > $tomodelid->order)
    //         {

    //             $order_from = $tomodelid->order ;  
    //             $order_to =    $modelid->order ;

    //           $res1 =  $increment_objects =  $modelclass->whereBetween('order',[$order_from ,$order_to])->increment('order',1);
              
    //            $modelid->order =$order_from ;
    //          $res2 =   $modelid->save();
    //            alert()->success( __('application.done').__('application.delete'))->autoclose(5000);
    //            return redirect()->back();

    //         }

    //         if($modelid->order  < $tomodelid->order)
    //         {

    //             $order_from = $modelid->order ;   //2
    //             $order_to =   $tomodelid->order ; //4





    //            $decrement_objects =  $modelclass->whereBetween('order',[$order_from ,$order_to])->decrement('order',1);
              

    //            $modelid->order =$order_to ;
    //            $modelid->save();
    //            alert()->success( __('application.done').__('application.delete'))->autoclose(5000);
    //            return redirect()->back();
    //         }



    //         dd($model::all() , $modelid);
        
    //     // ,
    //     // $modelid->order,$tomodelid->order,


    //     // $model::whereBetween('order',[$modelid->order,$tomodelid->order])->get()
    //     // );

    //     }
        


    // }
}
