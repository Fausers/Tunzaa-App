<?php

namespace App\Models\Azam;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tariff extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'order',
        'from',
        'to',
        'withdraw',
        'to_azam_pesa',
        'to_mobile_nets',
        'to_bank',
        'toll_to_azam',
        'toll_to_bank',
        'toll_withdraw',
    ];
}
