<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderTimings extends Model
{
    protected $table = 'order_timings';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
