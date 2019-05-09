<?php

namespace BetterLife;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cause extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
    // Protected $fillable = [
    //     'name','description','goal', 'status', 'current_money'
    // ];

    public function donations()
    {
      return $this->belongsToMany(Donation::class);
    }
}
