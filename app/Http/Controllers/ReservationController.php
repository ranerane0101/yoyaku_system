<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        $rooms = Room::select('id', 'name', 'time_steps')->get();
        return view('reservation.index')->with([
            'rooms'=> $rooms
        ]);
    }

    public function request_reservation(Request $request)
    {
        $reservations = \App\Models\Reservation::all();
        
        return view ('reservation.request_reservation', [
            'reservations' => $reservations
        ]);
        
    }

    public function store(Request $request){

        $reservation = new Reservation();
        $reservation->user_id = auth()->id();
        $reservation->room_id = $request->room_id;
        $reservation->starts_at = $request->start_at;
        $result = $reservation->save();

        return ['result' => $result];
    }
    
    //日付に一致したレコードを返す
    public function reservation_list(Request $request){
        $reservations = Reservation::select('id', 'room_id', 'starts_at')->whereDate('starts_at', $request->date)->get();

        return [
            'reservations' => $reservations
        ];

        
    }

   

    
}
