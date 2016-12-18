<?php

namespace App\Http\Controllers;

use App\Cartel;
use App\CartelType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartelsController extends Controller
{
    public function showDashboard()
    {
        $user = Auth::user();
        $cartels = $user->cartels;

        return view('cartels', ['cartels' => $cartels]);
    }

    public function showCartel($cartel_id)
    {
        $cartel = Cartel::find($cartel_id);

        if ($cartel->user_id != Auth::user()->id) {
            return redirect()->back();
        }

        return view('cartel', ['cartel' => $cartel]);
    }

    public function showFactory($type)
    {

        $cartelType = CartelType::where('name', $type)->first() ;

        return view('factory', ['cartelType' => $cartelType]);
    }

}
