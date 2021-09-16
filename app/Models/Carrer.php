<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [

        'title',
        'info',
        'help',
        'logo',
        'content',
        'status',
    ];

    public function appliers()
    {
        return $this->hasMany(CarrerAppliers::class  ,'carrer_id' , 'id');
    }
}
