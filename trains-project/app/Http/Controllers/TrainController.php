<?php

namespace App\Http\Controllers;

use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        // prende tutti i treni dal DB
        $trains = Train::all();
        // li passa alla view
        return view('home', compact('trains'));
    }
}
