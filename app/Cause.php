<?php

namespace BetterLife;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    protected $guarded = ['id'];

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
