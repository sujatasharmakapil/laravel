<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class helping extends Model
{
    use HasFactory;

    protected $table = 'helping';
    public $timestamps = false;

     protected $fillable = [
        'name','firstname','lastname','email','password',
    ];
}