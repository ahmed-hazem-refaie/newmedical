<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    
    protected $fillable =[
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'image_ar',
        'image_en',
        'category_id',
        'status',
        'seo_title_en',
        'seo_title_ar',
        'seo_description_en',
        'seo_description_ar',
        'seo_keywords_en',
        'seo_keywords_ar',
        'user_id',
        'category_id'

    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function user(){
        return $this->belongsTo(Blog::class);
    }

}
