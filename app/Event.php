<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    @var array;

    protected $fillable = [
        'nome', 'data'
    ];

    public function users(){
        return $this->BelongsToMany('App\User');
    }
}
