<?php

/**
 * Setting Name
 * @param $name
 * @return mixed
 */
function getsetting($name)
{
    $setting=\App\Models\Setting::where('name',$name)->first();

    if ($setting)
        return $setting->value();
}





function slugify($text)
{

    $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
    // replace non letter or digits by -
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
    // trim
    $text = trim($text, '-');
    return $text;


    return $text;
}




function statusstring($status)
{
    if($status)
    return __('active');
    return __('deactive');
    
}







/**
 * Upload Path
 * @return string
 */
function uploadpath()
{
    return 'photos';
}



/**
 * Get Image
 * @param $filename
 * @return string
 */
function getimg($filename)
{
    $base_url = url('/');
    return $base_url.'/storage/'.$filename;
}

/**
 * Upload an image
 * @param $img
 */
function uploader($request,$img_name)
{
    $path = \Storage::disk('public')->putFile(uploadpath(), $request->file($img_name));
    return $path;
}

/**
 * Upload an Multiimage
 * @param $img
 */
function uploaderOne($img_name,$filepath=null)
{
    $uploadpath = uploadpath();
    if($filepath)
    $uploadpath = $filepath;

    $path = \Storage::disk('public')->putFile($uploadpath, $img_name );
    return $path;
}

function uploaderImg($request,$img_name)
{
    $path = \Storage::disk('public')->putFile(uploadpath(), $request->image[0]);
    return $path;
}
function uploaderEnImg($request,$img_name)
{
    $path = \Storage::disk('public')->putFile(uploadpath(),$request->image[1]);
    return $path;
}

function deleteImg($img_name , $path = 'photos' )
{
    
     \Storage::disk('public')->delete($path,$img_name);
    return True;
}












function popup($name, $validator = null,$custom = null)
{
    if ($validator != null) {
        return alert()->error($validator->errors()->first())->autoclose(5000);
    }
    if ($name == 'add') {
        return alert()->success('تم الاضافه بنجاح')->autoclose(5000);
    } elseif ($name == 'update') {
        return alert()->success('تم التعديل بنجاح')->autoclose(5000);
    }elseif ($name == 'delete'){
        return alert()->success('تم الحذف بنجاح')->autoclose(5000);
    }elseif ($name == 'custom'){
        return alert()->success($custom)->autoclose(5000);
    }elseif ($name == 'info'){
        return alert()->info($custom)->autoclose(5000);
    }elseif ($name == 'danger'){
        return alert()->error($custom)->autoclose(5000);
    }

}

function multiUploaderWithmodel($request,$img_name,$model,$property_id){
    $images= [];
    $i = 0;
    foreach ($request[$img_name] as $image){
        $path = \Storage::disk('public')->putFile(uploadpath(), $image);
        $images[$i] = $path;
        $i++;
        $model->create(['file'=>$path, 'property_id'=>$property_id,]);
    }
    return $images;


}









function upload_file ($file)
{
    $customer_file = 'customer_filles';
    $path = \Storage::disk('public')->putFile($customer_file,$file);
    return $path;
}

function deleteFile($file)
{
    $customer_file = 'customer_filles';

     \Storage::disk('public')->delete($customer_file,$file);
    return True;
}


 function filter_by_key_prefix ( $arr, $prefix, $drop_prefix=false ) {
    $params = array();
    foreach( $arr as $k=>$v ) {
        if ( strpos( $k, $prefix ) === 0 ) {
            if ( $drop_prefix ) {
                $k = substr( $k, strlen( $prefix ) );
            }
            $params[ $k ] = $v;
        }
    }
    return $params;
}



function field_content($settings  , $setting , $field)
{



    //     $value = 'https://www.youtube.com/watch?v=4TaeA0Axhag';

    //     if(strpos($value, "www.youtube.com/watch?v=") !== false) {
    //         $link = preg_split("!&!", $value);
    //         $value = preg_replace("!watch\?v=!", "embed/", $link[0]);
    //         dd($value);
    //         $value = "<br><iframe frameborder=\'0\' style=\'visibility:visible; border: solid 4px #37474F;\' width=\'580\' height=\'315\' src=\'" . $value ."\'></iframe>";

    //     }
    // dd($value);

    if(count($settings)) 
    $first = $settings->where('name_en',$setting )->first();
    else
    $first = \App\Models\Setting::with('fields')->where('name_en',$setting )->first();
   
    if($first)
    {
        $first_field = $first->fields->where('name' , $field)->first();
        if($first_field &&  $value = $first_field->value)
        {
            if($first_field->type == '3')
            return getImg($value);
            if($first_field->type == '33')
            return getImg($value);
            if($first_field->type == '4')
            return getImg($value);
            return $value ; 
        }
    }


    return null;
}


function upload_img_resize ($img , $path="photos/" , $dim1=1080  ,$dim2= 1080 )
{
    
        $extention =  $img->getClientOriginalExtension();

        $photo = \Image::make($img)
        ->resize($dim2, $dim2)
        //  function ($constraint) { $constraint->aspectRatio(); } )
        ->encode($extention,80);
        $path = $path.uniqid().".".$extention;
        \Storage::disk('public')->put( $path, $photo);
        return $path;

}