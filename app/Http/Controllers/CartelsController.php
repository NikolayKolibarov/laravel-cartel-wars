<?php

namespace App\Http\Controllers;

use App\ArmyBuilding;
use App\Cartel;
use App\Jobs\BuildArmyBuilding;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CartelsController extends Controller
{
    public function showCartels()
    {
        $user = Auth::user();
        $cartels = $user->cartels;

        return view('cartels', ['cartels' => $cartels]);
    }

    public function showCartel($cartel_id)
    {
        $cartel = Cartel::find($cartel_id);

        if ($cartel) {
            if ($cartel->user_id != Auth::user()->id) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();

        }


        return view('cartel', ['cartel' => $cartel]);
    }

    public function showFactory($cartel_id)
    {
        $cartel = Cartel::find($cartel_id);

        if ($cartel) {
            if ($cartel->user_id != Auth::user()->id) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();

        }

        return view('factory', ['cartel' => $cartel]);
    }

    public function buildResourceBuilding(Request $request, $cartel_id, $buildingId)
    {

    }

    public function buildArmyBuilding(Request $request, $cartel_id, $building_id)
    {
        $user = Auth::user();
        $armyBuilding = ArmyBuilding::find($building_id);
        $cartel = Cartel::find($cartel_id);

        if ($user->money >= $armyBuilding->price) {
            $user->money -= $armyBuilding->price;
            $user->save();
            $job = (new BuildArmyBuilding($cartel, $armyBuilding))->delay(Carbon::now()->addSeconds($armyBuilding->build_time));

            Log::info('Dispatched');
            $this->dispatch($job);

            return redirect()->route('cartel-details', ['cartel_id' => $cartel_id])->with(['added' => 'Started building ' .  $armyBuilding->name . '. It will finish building after ' . $armyBuilding->build_time . ' mins.']);


        } else {
            return redirect()->route('cartel-factory', ['cartel_id' => $cartel_id])->with(['error' => 'Not enough money.']);
        }


    }

    public function trainCartelArmyUnit(Request $request, $cartel_id, $unit_id)
    {

    }

}
