<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = "Booking";
    protected $primaryKey = "id";
    protected $guarded = [];
    public $timestamps = false;

    public function tour(){
        return $this->belongsTo('App\Models\Tour', 'tour_id', 'id');
    }

    public function user(){
        return $this->belongsTo('App\Models\Users', 'tour_id', 'id');
    }
}
