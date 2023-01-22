<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class About extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'title',
        'head',
        'text_1',
        'text_2',
        'image',
        'title_low',
        'text_low_1',
        'text_low_2'
    ];
}
