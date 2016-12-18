<?php

use App\ArmyUnit;
use Illuminate\Database\Seeder;

class ArmyUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unit = new ArmyUnit();
        $unit->army_building_id = 1;
        $unit->name = 'Hitman';
        $unit->health = 150;
        $unit->attack = 150;
        $unit->save();

        $unit = new ArmyUnit();
        $unit->army_building_id = 2;
        $unit->name = 'Sicario';
        $unit->health = 50;
        $unit->attack = 200;
        $unit->save();
    }
}
