<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedProduct extends Model
{
    use HasFactory;


    protected $fillable = [
        'related_product_id',
        'product_id',
        '',
        '',
        
    ];


    public function related_products()
    {
        return $this->hasMany(RelatedProduct::class, 'product_id', 'id');
    }

    public function relatedproducts()
    {
        return $this->belongsToMany(Product::class,'related_products','product_id','related_product_id');

    }


}
