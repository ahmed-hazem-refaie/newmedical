<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        
        
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'icon',
  


    ];


    public function fields()
    {

        return $this->hasMany(SettingField::class, 'setting_id', 'id');
    }
}
