<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour_Itinerary extends Model
{
    use HasFactory;
    protected $table = "Tour_Itinerary";
    protected $primaryKey ="id";
    protected $guarded = [];
    public $timestamp = false;
}
