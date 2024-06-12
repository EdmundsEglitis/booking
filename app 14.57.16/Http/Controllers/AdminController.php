<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Booking;
class AdminController extends Controller{


    public function admin()
    {
    return view('/admin');
    }

    public function showAddRoom() {
        return view('admin.addRoom');
    }

    public function roomStore(Request $request)
    {
        $request->validate(
            [
                "name" => ["required", "min:3", "max:50"],
                "price" => ["required", "numeric"],
                "description" => ["required", "min:3", "max:2024"],
                "img_url" => ["required", "image", "max:10240"],
                "availability" => ["required", "numeric"],
                "location" => ["required", "min:3", "max:50"],
            ]
        );
        $booking = new booking();
        $booking->name = $request->name;
        $booking->price = $request->price;
        $booking->description = $request->description;
        $booking->availability = $request->availability;
        $booking->location = $request->location;


        $image_path = $request->file('img_url'); // storing img to variable

        // creating filename and saving the image
        $fileName = time() . '_' . $image_path->getClientOriginalName();
        $image_path->move(public_path('images'), $fileName);

        // storing filename to the database
        $booking->img_url = '/images/' . $fileName;


        $booking->created_by = auth()->user()->id;

        $booking->save();

        return back();
    }

}