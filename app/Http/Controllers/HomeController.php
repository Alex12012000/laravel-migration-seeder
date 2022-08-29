<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class HomeController extends Controller
{
    public function index() {
        $trip = Trip::all();

        $data = [
            'trip' => $trip
        ];

        return view('home', $data);


    }
}
