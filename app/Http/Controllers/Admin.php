<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    public function booking() {

        $user = Auth::user();
        session(['username' => $user->name]);

        return view('admin/admin');
    }

    public function booking_airduct() {
        $bookings = DB::table('book_airduct_cleaning')->select('book_airduct_cleaning.*')->get();

        return view('admin/bookings/airduct', ['bookings' => $bookings]);
    }

    public function booking_baby() {
        $bookings = DB::table('book_baby_sitting')->select('book_baby_sitting.*')->get();

        return view('admin/bookings/baby', ['bookings' => $bookings]);
    }

    public function booking_grass() {
        $bookings = DB::table('book_grass_cutting')->select('book_grass_cutting.*')->get();

        return view('admin/bookings/grass', ['bookings' => $bookings]);
    }

    public function booking_maids() {
        $bookings = DB::table('book_maid')->select('book_maid.*')->get();

        return view('admin/bookings/maids', ['bookings' => $bookings]);
    }

    public function booking_packers() {
        $bookings = DB::table('book_packers_and_movers')->select('book_packers_and_movers.*')->get();

        return view('admin/bookings/packers', ['bookings' => $bookings]);
    }

    public function booking_snow() {
        $bookings = DB::table('book_snow_cleaning')->select('book_snow_cleaning.*')->get();

        return view('admin/bookings/snow', ['bookings' => $bookings]);
    }
}
