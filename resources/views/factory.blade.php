@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Factory</h1>
        </div>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Resource Buildings</div>
                <div class="panel-body">

                    @foreach($cartel->cartelType->resourceBuildings as $resourceBuilding)
                        <div class="row">
                            <div class="col-md-6">
                                <h1>{{ $resourceBuilding->name }}</h1>
                                <h3>Price: <strong>${{ $resourceBuilding->price }}</strong></h3>
                                <h3>{{ $resourceBuilding->resource->name }} per hour:
                                    <strong>${{ $resourceBuilding->income_per_hour }} </strong></h3>
                                <form method="POST"
                                      action="{{ route('cartel-build-resource-building', ['cartel_id' => $cartel->id, 'building_id' => $resourceBuilding->id]) }}">
                                    <button class="btn btn-default">Build</button>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Army Buildings</div>
                <div class="panel-body">

                    @foreach($cartel->cartelType->armyBuildings as $armyBuilding)
                        <div class="row">
                            <div class="col-md-6">
                                <h1>{{ $armyBuilding->name }}</h1>
                                <p>Units:</p>
                                <ul>
                                    @foreach($armyBuilding->armyUnits as $armyUnit)
                                        <li>
                                            <strong>{{ $armyUnit->name }} </strong> - (HP:
                                            <strong>{{ $armyUnit->health }}</strong> / ATK:
                                            <strong>{{ $armyUnit->attack }}</strong> )
                                        </li>
                                    @endforeach
                                </ul>
                                <h3>Price: <strong>${{ $armyBuilding->price }}</strong></h3>
                                <form method="POST"
                                      action="{{ route('cartel-build-army-building', ['cartel_id' => $cartel->id, 'building_id' => $armyBuilding->id]) }}">
                                    <button class="btn btn-default">Build</button>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                </form>
                            </div>
                        </div>
                        <br>

                    @endforeach
                </div>

            </div>
        </div>


    </div>
@endsection
