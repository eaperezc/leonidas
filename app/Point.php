<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id', 'points',
    ];

}
