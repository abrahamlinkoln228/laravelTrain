<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ihor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'ihor';

    protected $fillable = ['email'];
    
}
