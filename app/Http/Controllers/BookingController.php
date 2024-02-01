<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\User;
use App\Notifications\BookingSuccessful;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.bookings.index');
    }

    public function booking(Request $request){
        $booking = Booking::create([
            'user_id' =>Auth::user()->id,
            'booking'  => $request->booking
        ]);
        User::find(Auth::user()->id)->notify(new BookingSuccessful($booking->booking));

        return redirect()->back()->with('status','Your deposit was successful!');
    }

    public function markAsBooking(){
        Auth::user()->unreadNotifications->where('data.location', 'location1')->markAsRead();
        return redirect()->back();
    }
}
