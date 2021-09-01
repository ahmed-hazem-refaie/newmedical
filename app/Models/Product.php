<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
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
    
    'order',
    'status',

    'alpha_category',
    'seo_description',
    'seo_title',
    'seo_keywords',
    // '',
   ];


public function faq()
{
    return $this->hasMany(ProductFaq::class, 'product_id' , 'id');
}

public function media()
{
   return $this->hasMany(ProductMedia::class, 'product_id' , 'id');
}

}



