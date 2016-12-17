<?php

use App\CartelType;
use Illuminate\Database\Seeder;

class CartelTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cartel_type = new CartelType();
        $cartel_type->name = 'Bratva';
        $cartel_type->save();

        $cartel_type = new CartelType();
        $cartel_type->name = 'Medellin Cartel';
        $cartel_type->save();
    }
}
