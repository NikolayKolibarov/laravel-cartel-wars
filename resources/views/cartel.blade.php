@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>{{ $cartel->cartelType->name }}</h1>
            <p>Money: <strong> {{ $cartel->money }}</strong></p>
        </div>

        <div class="row">
            <a href="{{ route('cartel-factory', ['type' => $cartel->cartelType->name]) }}" class="btn btn-default">Factory</a>
        </div>


        <div class="row">
            @foreach($cartel->cartelResourceBuildings as $cartelResourceBuilding)

                <div class="col-md-4 col-md-offset-1">
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
                                    <strong>{{ $cartelResourceBuilding->resourceBuilding->income_per_hour }}g</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
