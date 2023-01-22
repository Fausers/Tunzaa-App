<?php

namespace App\Models\Azam;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TariffData extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'terms',
    ];
}
