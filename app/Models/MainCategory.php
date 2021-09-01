<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

   protected  $fillable = [

    'logo',
    'name',
    'title',
    'description',
    'image',
    'header_image',
    'content',
    
    
    'seo_description',
    'seo_title',
    'seo_keywords',
    // '',
   ];
   public function product()
   {
       return $this->hasMany(Product::class , 'maincategory_id' , 'id');
   }





}




