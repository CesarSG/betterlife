<?php

namespace BetterLife;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $guarded = ['id'];

    public function causes()
    {
      return $this->belongsToMany(Cause::class);
    }
    // scope
    // public function scopeMisDonaciones($query){
    //   return $this->where('user_id', \Auth::id());
    // }
}
