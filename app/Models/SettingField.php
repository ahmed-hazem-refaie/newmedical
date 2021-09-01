<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingField extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        
        
        'help',
        'value',
        'type',
        'name',
        'setting_id',
        'dim1',
        'dim2',
        'validation_msg',
        'validation'


    ];
    public function blog()
    {
        return $this->hasOne(Setting::class, 'id', 'setting_id');
    }
}
