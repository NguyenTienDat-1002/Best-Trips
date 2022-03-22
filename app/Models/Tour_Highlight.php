<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour_Highlight extends Model
{
    use HasFactory;
    protected $table = "Tour_Highlight";
    protected $primaryKey = "id";
    protected $guarded = [];
    public $timestamps = false;
}
