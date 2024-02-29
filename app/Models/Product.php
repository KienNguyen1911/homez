<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [];

    const STATUS = [
        0 => 'Inactive',
        1 => 'Active',
        3 => 'Sold out',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function province()
    {
        return $this->belongsTo(\Kjmtrue\VietnamZone\Models\Province::class, 'province_id', 'id');
    }

    public function district()
    {
        return $this->belongsTo(\Kjmtrue\VietnamZone\Models\District::class, 'district_id', 'id');
    }

    public function ward()
    {
        return $this->belongsTo(\Kjmtrue\VietnamZone\Models\Ward::class, 'ward_id', 'id');
    }
}
