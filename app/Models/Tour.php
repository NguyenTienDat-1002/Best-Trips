<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $table = "Tour";
    protected $primaryKey ="id";
    protected $guarded = [];
    public $timestamps = false;

    public function province(){
        return $this->belongsTo('App\Models\Province','departure_point','id');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment','tour_id','id');
    }
    
    public function tour_highlights(){
        return $this->hasMany('App\Models\Comment', 'tour_id','id');
    }
}
