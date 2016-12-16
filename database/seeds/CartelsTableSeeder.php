<?php

use Illuminate\Database\Seeder;
use App\Cartel;

class CartelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cartel = new Cartel();
	    $cartel->name = 'Medelin Cartel';
	    $cartel->save();

	    $cartel = new Cartel();
	    $cartel->name = 'Bratva';
	    $cartel->save();
    }
}
