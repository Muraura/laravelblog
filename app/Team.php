<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mail\TeamCreated;

class Team extends Model
{

 protected static function boot()
  {
    parent::boot();
    static::created(function($team){
      \Mail::to($team->user->email)->queue(
        new TeamCreated($team)
     );
    });
  }
       protected $guarded = [];
       public function players()
       {
         return  $this->hasMany(Player::class);
       }

       public function  addPlayer($attributes)
       {
           $this->players()->createMany(compact('attributes'));
       }
       public function user()
       {
         return $this->belongsTo(User::class);
       }


}
