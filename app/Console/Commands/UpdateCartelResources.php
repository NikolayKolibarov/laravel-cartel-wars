<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class UpdateCartelResources extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cartels:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates Cartel Resources';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
            foreach ($user->cartels as $cartel) {
                foreach ($cartel->cartelType->resourceBuildings as $resourceBuilding) {
                    foreach ($cartel->cartelResources as $cartelResource) {
                        if ($resourceBuilding->resource->name == $cartelResource->resource->name) {
                            $cartelResource->amount += $resourceBuilding->income_per_hour * (1 / 30);
                            $cartelResource->save();
                        }
                    }
                }
            }
        }
    }
}
