<?php

namespace App\Http\Controllers;
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
        return view('admin.notifications.notification');
    }

    public function delivery(Request $request){
        $delivery = Delivery::create([
            'user_id' =>Auth::user()->id,
            'delivery'  => $request->delivery
        ]);
        User::find(Auth::user()->id)->notify(new DeliverySuccessful($delivery->delivery));

        return redirect()->back()->with('status','Your deposit was successful!');
    }

    public function markAsDeliver(){
        Auth::user()->unreadNotifications->where('data.location', 'location2')->markAsRead();
        return redirect()->back();
    }
}
