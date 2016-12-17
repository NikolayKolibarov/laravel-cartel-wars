<?php

namespace App\Http\Controllers;

use App\Cartel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartelsController extends Controller
{
    public function showDashboard()
    {
        $user = Auth::user();
        $cartels = $user->cartels;

        return view('dashboard', ['cartels' => $cartels]);
    }

    public function showCartel($cartel_id)
    {
        $cartel = Cartel::find($cartel_id);

        return view('cartel', ['cartel' => $cartel]);
    }

}
