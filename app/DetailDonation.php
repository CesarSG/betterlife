<?php

namespace BetterLife;

use Illuminate\Database\Eloquent\Model;

class DetailDonation extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
      'amount',
      'cause_id',
      'donation_id'
    ];

}
