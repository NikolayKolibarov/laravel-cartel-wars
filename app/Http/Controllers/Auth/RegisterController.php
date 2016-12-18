<?php

namespace App\Http\Controllers\Auth;

use App\Cartel;
use App\CartelResource;
use App\CartelResourceBuilding;
use App\CartelType;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/cartels';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $medellinCartel = CartelType::find(2);
        $bratva = CartelType::find(1);

        $colombian_cartel = new Cartel();
        $colombian_cartel->user()->associate($user);
        $colombian_cartel->cartelType()->associate($medellinCartel);
        $colombian_cartel->location_x = rand(0, 100);
        $colombian_cartel->location_y = rand(0, 100);
        $colombian_cartel->level = 1;
        $colombian_cartel->money = 2000;
        $colombian_cartel->save();

        foreach ($colombian_cartel->cartelType->resourceBuildings as $resourceBuilding) {
            $cartelResourceBuilding = new CartelResourceBuilding();
            $cartelResourceBuilding->cartel()->associate($colombian_cartel);
            $cartelResourceBuilding->resourceBuilding()->associate($resourceBuilding);
            $cartelResourceBuilding->level = 1;
            $cartelResourceBuilding->save();

            $cartelResource = new CartelResource();
            $cartelResource->cartel()->associate($colombian_cartel);
            $cartelResource->resource()->associate($resourceBuilding->resource);
            $cartelResource->amount = $resourceBuilding->initial_resource_amount;
            $cartelResource->save();
        }

        $russian_cartel = new Cartel();
        $russian_cartel->user()->associate($user);
        $russian_cartel->cartelType()->associate($bratva);
        $russian_cartel->location_x = rand(0, 100);
        $russian_cartel->location_y = rand(0, 100);
        $russian_cartel->level = 1;
        $russian_cartel->money = 2000;
        $russian_cartel->save();

        foreach ($russian_cartel->cartelType->resourceBuildings as $resourceBuilding) {
            $cartelResourceBuilding = new CartelResourceBuilding();
            $cartelResourceBuilding->cartel()->associate($russian_cartel);
            $cartelResourceBuilding->resourceBuilding()->associate($resourceBuilding);
            $cartelResourceBuilding->level = 1;
            $cartelResourceBuilding->save();

            $cartelResource = new CartelResource();
            $cartelResource->cartel()->associate($russian_cartel);
            $cartelResource->resource()->associate($resourceBuilding->resource);
            $cartelResource->amount = $resourceBuilding->initial_resource_amount;
            $cartelResource->save();
        }

        return $user;

    }
}
