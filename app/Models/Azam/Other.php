<?php

namespace App\Models\Azam;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Other extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'head_1',
        'head_2',
        'head_3',
        'head_4',
        'head_5',
        'contact_head',
        'contact_text',
        'phone',
        'address',
        'contacts_name',
        'contacts_mail',
        'contacts_phone',
        'contacts_image',
        'contacts_message',
    ];
}
