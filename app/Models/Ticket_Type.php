<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket_Type extends Model
{
    use HasFactory;
    protected $table = "Ticket_Type";
    protected $primaryKey = "id";
    protected $guard = [];
    public $timestamps = false;
}
