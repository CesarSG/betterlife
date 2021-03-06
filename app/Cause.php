<?php

namespace BetterLife;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cause extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
    // Protected $fillable = [
    //     'name','description','image','goal', 'status', 'current_money'
    // ];

    public function donations()
    {
      return $this->belongsToMany(Donation::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    public function images(){
      return $this->morphOne(Image::class, 'imagetable');
    }

    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', "%$name%");
    }
}
