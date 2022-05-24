<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;


    protected $fillable = [
        '',
        '',
        'status',
        'lg_text_en',
        'lg_text_ar',
        'sm_text_ar',
        'sm_text_en',
        'image_en',

        'image_ar',
    ];




}
