<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamps = false;

    public function workers()
    {
        return $this->belongsToMany('App\Worker', 'worker_department');
    }
}
