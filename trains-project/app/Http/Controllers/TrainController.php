<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::now();

        // Prende solo i treni dalla data odierna in poi, ordinati per partenza
        $trains = Train::where('orario_partenza', '>=', $today)
            ->orderBy('orario_partenza', 'asc')
            ->get();

        // Passa i dati alla view
        return view('home', compact('trains'));
    }
}
