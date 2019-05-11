<?php

namespace BetterLife;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Donation extends Model
{
    // use softDeletes;
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

    public function users()
    {
      return $this->belongsTo(User::class);
    }
    // scope
    // public function scopeMisDonaciones($query){
    //   return $this->where('user_id', \Auth::id());
    // }
}
