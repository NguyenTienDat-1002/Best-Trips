<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "Comment";
    protected $primaryKey = "id";
    protected $guarded = [];
    public $timestamps = false;

    public function tour(){
        return $this->belongsTo('App\Models\Tour','tour_id','id');
    }

    public function user(){
        return $this->belongsTo('App\Models\Users','user_id','id');
    }
}
