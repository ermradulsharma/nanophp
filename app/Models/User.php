<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Table 'users' is assumed by Eloquent
    protected $fillable = ['name', 'email', 'password'];
}

