<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanModel extends Model
{
    use HasFactory;

    protected $table = 'plans_table';

     protected $fillable = [
        'plan_id', 'plan_name', 'plan_duration', 'calls_limit', 'plan_description','plan_features',
    ];

}
