<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    const _USER_ID = 'user_id';
    const _ROLES_ID = 'roles_id';

    protected $fillable = [
        self::_USER_ID,
        self::_ROLES_ID,
    ];

}
