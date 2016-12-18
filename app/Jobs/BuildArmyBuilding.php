<?php

namespace App\Jobs;

use App\ArmyBuilding;
use App\Cartel;
use App\CartelArmyBuilding;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class BuildArmyBuilding implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $cartel;
    protected $armyBuilding;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Cartel $cartel, ArmyBuilding $armyBuilding)
    {
        if (!empty($cartel)) {
            $this->cartel = $cartel;
        }
        if (!empty($armyBuilding)) {
            Log::info($armyBuilding);
            $this->armyBuilding = $armyBuilding;
        }
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('Army building built successfully');
        Log::info($this->cartel);
        Log::info($this->armyBuilding);

        $cartelArmyBuilding = new CartelArmyBuilding();
        $cartelArmyBuilding->cartel()->associate($this->cartel);
        $cartelArmyBuilding->armyBuilding()->associate($this->armyBuilding);
        $cartelArmyBuilding->level = 1;
        $cartelArmyBuilding->save();

        Log::info($cartelArmyBuilding);
    }
}
