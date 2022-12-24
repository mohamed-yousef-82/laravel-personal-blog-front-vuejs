<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'name',
        'job',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'image',
    ];

    public static function checkSetting(){
        $setting = Self::all();
        if(count($setting) < 1){
         $data = [
            "name"=>"My Blog"
         ];
         Self::create($data);

        }        // dd($setting);
    }
}
