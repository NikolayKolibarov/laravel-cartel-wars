<?php

use App\ResourceBuilding;
use Illuminate\Database\Seeder;

class ResourceBuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resource_building = new ResourceBuilding();
        $resource_building->cartel_type_id = 1;
        $resource_building->name = 'Heroin Laboratory';
        $resource_building->price = 10000;
        $resource_building->initial_resource_amount = 1000;
        $resource_building->income_per_hour = 3000;
        $resource_building->save();

        $resource_building = new ResourceBuilding();
        $resource_building->cartel_type_id = 2;
        $resource_building->name = 'Cocaine Laboratory';
        $resource_building->price = 10000;
        $resource_building->initial_resource_amount = 1000;
        $resource_building->income_per_hour = 3000;
        $resource_building->save();

    }
}
