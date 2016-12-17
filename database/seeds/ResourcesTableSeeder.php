<?php

use App\Resource;
use Illuminate\Database\Seeder;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resource = new Resource();
        $resource->resource_building_id = 1;
        $resource->name = 'Heroin';
        $resource->save();

        $resource = new Resource();
        $resource->resource_building_id = 2;
        $resource->name = 'Cocaine';
        $resource->save();

    }
}
