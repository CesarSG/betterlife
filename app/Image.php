<?php

namespace BetterLife;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['image_patch'];
    
    public function imagetable()
    {
      return $this->morphTo();
    }
}
