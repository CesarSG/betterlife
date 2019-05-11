<?php

namespace BetterLife\Http\Controllers;

use BetterLife\User;
use BetterLife\Donation;
use BetterLife\DetailDonation;
use BetterLife\Cause;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $donations = Donation::all();
      // dd($donations );
      return view('admin.donations.index')->with(compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user = Auth::user()->id();
        // return view('admin.donations.create')->whit(compact('user'));
        return view('admin.donations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $donation = new Donation();
      $donation->user_id = $request->input('user_id');
      $donation->dataTime_donation = Carbon::now()->addDays(30)->format('Y-m-d H:i:s');
      $donation->save();
      $id = $donation->id;
      $notification = 'El documento de donacion se ha registrado exitosamente. Ahora ingrese los productos';
      return redirect('admin/donacion/'.$id.'/edit')->with(compact('notification'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \BetterLife\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $causes = Cause::all();
      $donation = Donation::find($id);
      $donation_details = DetailDonation::where('donation_id', $donation->id)->get();
      $total = 0;
      foreach ($donation_details as $donation_detail)
          $total = $total + $donation_detail->amount;

      return view('admin.donations.detail')->with(compact('donation','causes','donation_details', 'total'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \BetterLife\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {      
      $causes = Cause::all();
      $donation = Donation::find($id);
      $donation_details = DetailDonation::where('donation_id', $donation->id)->get();
      // dd($donation_details);
      $total = 0;

      foreach ($donation_details as $donation_detail)
          $total = $total + $donation_detail->amount;

          $donation_t = Donation::find($id);
          $donation_t->Total = $total;
          $donation_t->save();

      return view('admin.donations.edit')->with(compact('donation','causes','donation_details','total'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \BetterLife\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \BetterLife\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cause = Donation::find($id);
      $cause->delete();

      return back()->with('notification', 'La donacion se ha eliminado correctamente.');
    }
}
