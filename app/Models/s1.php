<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class s1 extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 's1';
    public $timestamps = false;

     protected $fillable = [
        'name','email','password',
    ];
}
