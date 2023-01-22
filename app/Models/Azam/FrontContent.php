<?php

namespace App\Models\Azam;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FrontContent extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'app_title',
        'app_desc',
        'app_image',
        'app_button',
        'app_button_url',
        'service1_icon',
        'service1_title',
        'service1_desc',
        'service2_icon',
        'service2_title',
        'service2_desc',
        'service3_icon',
        'service3_title',
        'service3_desc',
        'service4_icon',
        'service4_title',
        'service4_desc',
        'bills_text',
        'bills_image',
        'tariffs_text',
        'tariffs_image',
        'your_bils',
        'our_tarifs',
        'view_tarifs',
        'learn_more',
        'get_more',
        'sajili',
    ];
}
