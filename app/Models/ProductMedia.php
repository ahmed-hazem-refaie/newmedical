<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductMedia extends Model
{
    use HasFactory;


    use SoftDeletes;  
    
    
    
    



    
    

    protected  $fillable = [

  
        'media',
        'description',
        'name',
     

        'order',
        'type',
        'status',
        
        
        'seo_description',
        'seo_title',
        'seo_keywords',
        // '',
       ];
    
    }

    



    
    