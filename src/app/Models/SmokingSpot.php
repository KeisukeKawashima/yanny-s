<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmokingSpot extends Model
{
    use HasFactory;

    /**　喫煙所テーブル @var string $table テーブル名 */
    protected $table = 'smoking_spots';

    /**　喫煙所主キー @var string $table 主キー */
    protected $primaryKey = 'smoking_spot_id';

    /** 代入可能な属性 @var string $fillable  */
    protected $fillable = [
        'name',
        'description',
        'latitude',
        'longtitude',
        'roofed',
        'hours',
        'has_bench',
        'electronic_cigarette_allowed',
        'cigarette_allowed',
        'walled',
        'type'
    ];
}
