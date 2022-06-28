<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class helpModel extends Model
{
    use HasFactory;

    protected $table = 'helpModel';
    public $timestamps = false;

     protected $fillable = [
        'name','firstname','lastname','email','password',
    ];
}