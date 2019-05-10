<?php

namespace BetterLife;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $guarded = ['id'];
    protected $fillable =
    [
      'user_id',
      'dataTime_Donation',
      'total'
    ];

    public function causes()
    {
      return $this->belongsToMany(Cause::class);
    }
    // scope
    // public function scopeMisDonaciones($query){
    //   return $this->where('user_id', \Auth::id());
    // }
}
