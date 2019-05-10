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
      $donation_detail = new DonationDetail();
      $donation_detail->donation_id = $donation->id;
      $donation_detail->amount = $request->input('amount');
      $donation_detail->cause_id = $request->input('cause_id');

      $donation_detail->save();

      return back()->with('notification', 'Caua agregada al donativo.');
      }
  }
}
