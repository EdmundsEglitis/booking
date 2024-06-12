<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Booking;
class BookingController extends Controller{

    public function viewBookings()
    {

    
    $bookings = Booking::all();
    return view('/bookings', compact('bookings'));
    

}
public function view($id)
{
    $bookings = Booking::where('id', $id)->get();
    return view('/show', compact('bookings'));
}
}