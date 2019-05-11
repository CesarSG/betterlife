<?php

namespace BetterLife;

use Illuminate\Database\Eloquent\Model;

class DetailDonation extends Model
{
    protected $table = 'det_donations';

    protected $guarded = ['id'];
    protected $fillable = [
      'amount',
      'cause_id',
      'donation_id'
    ];

    public function causes()
    {
      // return $this->belongsToMany(Cause::class);
      return $this->belongsTo(Cause::class);
    }
}
