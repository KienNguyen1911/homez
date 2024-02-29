<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'user_infos';

    protected $casts = [
        'district_ids' => 'array',
    ];
}
