<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //id na logiraniot korisnik
        $user_id = Auth()->user()->id;

        //korisnikot kako objekt
        $user = User::find($user_id);

        //site listingsi od toj korisnik kako kolekcija(niza) od objekti
        $listings = $user->listings;

        return view('dashboard',compact('listings'));
    }
}
