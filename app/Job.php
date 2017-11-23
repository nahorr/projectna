<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $dates = ['date_closing', 'created_at'];
}
