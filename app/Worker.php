<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    public $timestamps = false;

    public function departments()
    {
        return $this->belongsToMany('App\Department', 'worker_department');
    }
}
