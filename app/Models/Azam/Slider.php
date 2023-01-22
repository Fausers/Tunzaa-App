<?php

namespace App\Models\Azam;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id','title','small_title','desc','image_url','button','button_url','ios_url','android_url'
    ];
}
