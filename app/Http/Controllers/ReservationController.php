<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use Illuminate\Support\Facades\Auth;
class ReservationController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $reservations = Reservation::all();
      return view ('reservation.reservationList', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('reservation.newReservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationRequest $request)
    {
      Reservation::create([
      'name' => $request->input('name'),
      'surname' => $request->input('surname'),
      'email' => $request->input('email'),
      'number_of_people' => $request->input('number_of_people'),
      'phone_number' => $request->input('phone_number'),
      'date_reservation' => $request->input('date_reservation'),
      'time_of_reservation' => $request->input('time_of_reservation'),
      'message' => $request->input('message'),
      ]);
      if(Auth::user()->role==='admin'){
        return redirect()->route('reservation.index')->with('ZINUTE', 'STALIUKU REZERVACIJA SEKMINGA');
      }
      return redirect()->route('dish')->with('ZINUTE', 'STALIUKU REZERVACIJA SEKMINGA');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
      return view ('reservation.reservationForm', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $reservation->update([
        'name' => $request->input('name'),
        'surname' => $request->input('surname'),
        'email' => $request->input('email'),
        'number_of_people' => $request->input('number_of_people'),
        'phone_number' => $request->input('phone_number'),
        'date_reservation' => $request->input('date_reservation'),
        'time_of_reservation' => $request->input('time_of_reservation'),
        'message' => $request->input('message'),
      ]);
      return redirect()->route('reservation.index')->with('ZINUTE',"RESERVATION UPDATED");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
      $reservation->delete();
      return redirect()->route('reservation.index')->with('ZINUTE','Rezervacija Sekmingai istrinta');
    }
}
