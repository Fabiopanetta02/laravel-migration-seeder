<?php

namespace App\Http\Controllers;

use App\Models\Train;

class TrainController extends Controller
{
    //
    public function index()
    {
        $trains = [];
        return view('trains.index', compact('trains'));
    }
}
