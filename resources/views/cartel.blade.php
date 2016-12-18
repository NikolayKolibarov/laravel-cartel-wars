@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>{{ $cartel->cartelType->name }}</h1>
        </div>

        <div class="row">
            <a href="{{ route('cartel-factory', ['cartelId' => $cartel->id]) }}" class="btn btn-default">Factory</a>
        </div>

        <div class="row">
            @if(Session::has('added'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="alert alert-success">
                                <p class="has-success">{{ Session::get('added') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if(Session::has('error'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="alert alert-danger">
                                <p class="has-success">{{ Session::get('error') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>

        <p></p>

        <div class="row">
            <div class="col-md-5">
                @foreach($cartel->cartelResourceBuildings as $cartelResourceBuilding)

                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $cartelResourceBuilding->resourceBuilding->name}} - Level:
                            <strong>{{ $cartelResourceBuilding->level }}</strong></div>
                        <div class="panel-body">
                            <ul>
                                @foreach($cartel->cartelResources as $cartelResource)
                                    @if($cartelResource->resource->name == $cartelResourceBuilding->resourceBuilding->resource->name)
                                        <li>{{ $cartelResource->resource->name }} produced:
                                            <strong>{{ $cartelResource->amount }}g</strong></li>
                                    @endif
                                @endforeach
                                <li>{{ $cartelResourceBuilding->resourceBuilding->resource->name }} per hour:
                                    <strong>{{ $cartelResourceBuilding->resourceBuilding->income_per_hour }}g</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-5">
                @foreach($cartel->cartelArmyBuildings as $cartelArmyBuilding)

                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $cartelArmyBuilding->armyBuilding->name}} - Level:
                            <strong>{{ $cartelArmyBuilding->level }}</strong></div>
                        <div class="panel-body">
                            <p>Units</p>
                            @foreach($cartelArmyBuilding->armyBuilding->armyUnits as $armyUnit)

                                <form action="">
                                    <strong>{{ $armyUnit->name }} </strong> - (HP:
                                    <strong>{{ $armyUnit->health }}</strong> / ATK:
                                    <strong>{{ $armyUnit->attack }}</strong> )
                                    <input type="number" name="unit_count">
                                    <button class="btn btn-default">Train</button>
                                </form>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
