<?php

namespace BetterLife;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cause extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    public function donations()
    {
      return $this->belongsToMany(Donation::class);
    }
}
