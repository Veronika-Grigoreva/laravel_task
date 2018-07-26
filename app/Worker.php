<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Worker
 * @package App
 */
class Worker extends Model
{
    const MALE    = 'Мужской';
    const FEMALE  = 'Женский';
    const NULLSEX = '-------';

    public $timestamps = false;

    protected $fillable = [
        'name', 'last_name', 'third_name', 'sex', 'salary',
    ];

    protected $guarded = [
        'id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function departments()
    {
        return $this->belongsToMany('App\Department', 'worker_department');
    }

    /**
     * @return array
     */
    public static function  getAllSexOptions()
    {
        return [
            '0' => Worker::NULLSEX,
            '1' => Worker::FEMALE,
            '2' => Worker::MALE
        ];
    }
}
