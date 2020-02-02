<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    protected $table = 'departments';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'description', 'bureau'
    ];

}