<?php

use App\ArmyBuilding;
use Illuminate\Database\Seeder;

class ArmyBuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $army_building = new ArmyBuilding();
        $army_building->cartel_type_id = 1;
        $army_building->name = 'Barracks';
        $army_building->price = 6000;
        $army_building->build_time = 3;
        $army_building->save();

        $army_building = new ArmyBuilding();
        $army_building->cartel_type_id = 2;
        $army_building->name = 'Encampment';
        $army_building->price = 6000;
        $army_building->build_time = 3;
        $army_building->save();
    }
}
