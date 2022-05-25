<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function upload( Request $request)
   {

    $image = upload_file($request->file);
    $image  =getimginfo($image);

    return response()->json(['location'=>$image]);
   }

 
}
