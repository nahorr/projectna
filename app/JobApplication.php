<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    public function job()
    {
    	return $this->belongs('App\Job');
    }
}
