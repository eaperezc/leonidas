<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{


    protected $collection = 'points';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id', 'points',
    ];

}
