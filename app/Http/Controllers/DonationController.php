<?php

namespace BetterLife\Http\Controllers;

use BetterLife\User;
use BetterLife\Donation;
use BetterLife\DetailDonation;
use BetterLife\Cause;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //Constraining Eager Loads
      $donations = Donation::orderBy('Total', 'DESC')->get();
      return view('admin.donations.index')->with(compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //implementacion de policie
      if(\Auth::user()->cant('create', Donation::class)){
          return redirect()->back();
      }
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
      // $donation->user_id = $request->input('user_id');
      $donation->user_id = Auth::user()->id;
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
      //implementacion de Eager Loading
      $causes = Cause::with(['images'])->get();
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
      $causes = Cause::with(['images'])->get();
      // $causes = Cause::all();
      $donation = Donation::find($id);
      $donation_details = DetailDonation::where('donation_id', $donation->id)->get();
      $total = 0;

      foreach ($donation_details as $donation_detail)
          $total = $total + $donation_detail->amount;

          $donation_t = Donation::find($id);
          $donation_t->Total = $total;
          $donation_t->save();

      $notification = 'Causa agregada';
      return view('admin.donations.edit')->with(compact('donation','causes','donation_details','total','notification'));
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
