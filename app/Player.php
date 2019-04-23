<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = [];
    
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    // public function addPlayer($attibutes)
    // {
    //     $this->team->create(compact('attibutes'));
    // }
}
