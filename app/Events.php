<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{

    @var array;

    protected $fillable = [
        'nome', 'data'
    ];
}
