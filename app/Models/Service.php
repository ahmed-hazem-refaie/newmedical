<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;


    use SoftDeletes;



    protected $fillable =[

        'name_ar',
        'name_en',
        'info_ar',
        'info_en',
        'pdf',
        'description_one_ar',
        'image_ar',
        'image_en',
        'description_one_en',

        'description_two_ar',
        'description_two_en',
        'status',
        'seo_title_en',
        'seo_title_ar',
        'seo_description_en',
        'seo_description_ar',
        'seo_keywords_en',
        'seo_keywords_ar',

    ];





}
