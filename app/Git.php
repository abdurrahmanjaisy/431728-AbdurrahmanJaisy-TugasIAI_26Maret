<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $fillable = [
        'id', 'user_id', 'git', 'created_at', 'updated_at',
    ];
}
