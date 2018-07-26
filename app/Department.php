<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 * @package App
 */
class Department extends Model
{
    public $timestamps = false;

    protected $guarded = [
        'id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function workers()
    {
        return $this->belongsToMany('App\Worker', 'worker_department');
    }
}
