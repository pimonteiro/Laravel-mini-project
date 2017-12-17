<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $fillable = [
        'name', 'date'
    ];

    public function users(){
        return $this->BelongsToMany('App\User');
    }
}
