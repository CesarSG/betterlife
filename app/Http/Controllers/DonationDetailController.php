<?php

namespace BetterLife\Http\Controllers;

use Illuminate\Http\Request;
use BetterLife\Cause;
use BetterLife\Donation;
use BetterLife\DetailDonation;
class DonationDetailController extends Controller
{
  public function store($id, Request $request)
  {
      // dd($request->all());
      $rules = [

      ];
      $messages = [

      ];
      $this->validate($request, $rules, $messages);

      $donation = Donation::find($id);
      $donation_detail = new DetailDonation();
      $donation_detail->donation_id = $donation->id;

      $amount = $request->input('amount');
      $donation_detail->amount = $amount;

      $cause_id = $request->input('cause_id');
      $donation_detail->cause_id = $cause_id;
      $donation_detail->save();

      $total = 0;
          
      $cause = Cause::find($cause_id);
      $total = $cause->current_money;
      $total = $total + $amount;
      $cause->current_money = $total;
      $cause->save();



      return back()->with('notification', 'Causa agregada al donativo.');

  }
}
