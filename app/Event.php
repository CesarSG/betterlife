<?php

namespace BetterLife;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = ['id'];

    public function causes()
    {
        return $this->belongsToMany(Cause::class);
    }

    public function images(){
      return $this->morphOne(Image::class, 'imagetable');
    }
}
