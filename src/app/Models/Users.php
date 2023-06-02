<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    /** ユーザーテーブル　@var string $table テーブル名*/
    protected $table = 'users';
    
    /** ユーザーテーブル主キー　@var string $primaryKey 主キー */
    protected $primaryKey = 'user_id';

    /** 代入可能な属性 @var array $fillable  */
    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
    ];
}
