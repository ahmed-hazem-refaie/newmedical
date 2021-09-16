<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrerAppliers extends Model
{
    use HasFactory;


    protected $fillable = [


        'name',
        'email',
        'phone',
        'city',
        'country',
        'faculty',
        'grade',
        'help',
        'cv',
        'status',
        'seen',
        'carrer_id',
        'gender',
        'address',
    ];


    


    public function carrer()
    {
        return $this->hasOne(Carrer::class  ,'id' , 'carrer_id');
    }
}
