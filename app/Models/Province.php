<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $table = "Province";
    protected $primaryKey = "id";
    protected $guarded = [];
    public $timestamps = false;
    
    public function tours(){
        return $this->hasMany('App\Models\Tour','departure_point','id');
    }

}
