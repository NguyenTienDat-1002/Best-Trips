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
}
