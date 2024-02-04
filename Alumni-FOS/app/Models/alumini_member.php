<?php

namespace App\Models;

use App\Models\user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class alumini_member extends Authenticatable
{
    use HasFactory;

    public function User()
    {
        return $this->hasOne(User::class,'alumini_member_id','id');
    }
}
