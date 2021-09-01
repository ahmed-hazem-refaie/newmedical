<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFaq extends Model
{
    use HasFactory;



   protected  $fillable = [

  
    
    'title',
    'description',



    
    
    'seo_description',
    'seo_title',
    'seo_keywords',
    // '',
   ];


}
