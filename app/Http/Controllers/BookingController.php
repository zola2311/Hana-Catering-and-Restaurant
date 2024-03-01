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
        return view('admin.bookings.booking_notification');
    }

    public function book(){
        $bookings = Booking::all()->sortByDesc('id');
        return view('admin.bookings.index',compact('bookings'));
    }

    public function booking(Request $request){
        $booking = Booking::create([
            'user_id' =>Auth::user()->id,
            'name'  => $request->name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'reservation_date'  => $request->date,
            'reservation_time'  => $request->time,
            'number_of_people'  => $request->people,
            'message'  => $request->message,
        ]);
        User::find(Auth::user()->id)->notify(new BookingSuccessful($booking->reservation_date));

        return redirect()->back()->with('status','Your deposit was successful!');
    }

    public function status(Request $request){

        $booking = Booking::find($request->id);
        $booking->status = $request->has('status');
        $booking->save();

        return redirect()->back()->with('status','Done!');
    }

    public function markAsBooking(){
        Auth::user()->unreadNotifications->where('data.location', 'location1')->markAsRead();
        return redirect()->back();
    }
}
