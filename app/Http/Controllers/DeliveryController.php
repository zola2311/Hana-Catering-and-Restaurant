<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Delivery;
use App\Models\User;
use App\Notifications\DeliverySuccessful;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DeliveryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.deliveries.delivery_notification');
    }

    public function deliver(){
        $deliver = Delivery::all()->sortByDesc('id');
        return view('admin.deliveries.index',compact('deliver'));
    }

    public function delivery(Request $request){
        $delivery = Delivery::create([
            'user_id' =>Auth::user()->id,
            'name'  => $request->name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'order'  => $request->order,
            'quantity'  => $request->quantity,
            'description'  => $request->description,
        ]);
        User::find(Auth::user()->id)->notify(new DeliverySuccessful($delivery->order));

        return redirect()->back()->with('status','Your deposit was successful!');
    }
    public function status(Request $request){

        $deliver = Delivery::find($request->id);
        $deliver->status = $request->has('status');
        $deliver->save();

        return redirect()->back()->with('status','Done!');
    }
    public function markAsDeliver(){
        Auth::user()->unreadNotifications->where('data.location', 'location2')->markAsRead();
        return redirect()->back();
    }
}
