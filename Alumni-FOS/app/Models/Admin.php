<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\user;

class Admin extends Authenticatable
{
    use HasFactory;

    public function User()
    {
        return $this->hasOne(User::class,'admin_id','id');
    }
}
