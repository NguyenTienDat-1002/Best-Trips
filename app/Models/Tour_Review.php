<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour_Review extends Model
{
    use HasFactory;
    protected $table = "Tour_Review";
    protected $primaryKey = "id";
    protected $guarded = [];
    public $timestamps = false;
}
