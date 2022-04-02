<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use HasFactory;
    protected $table = "User";
    protected $primaryKey = "id";
    protected $guarded =[];
    public $timestamps = false;

    public function comments(){
        return $this->hasMany('App\Models\Comment','user_id','id');
    }
}
