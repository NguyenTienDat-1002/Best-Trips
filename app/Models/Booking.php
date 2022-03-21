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
    public $timestamp = false;
}
