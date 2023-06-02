<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmokingSpotImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'smoking_spot_id',
        'image_url',
    ];
}
