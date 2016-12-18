@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>{{ $cartel->cartelType->name }}</h1>
        </div>

        <div class="row">
            @foreach($cartel->cartelType->resourceBuildings as $resourceBuilding)

                <div class="col-md-4 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $resourceBuilding->name}} - Level:
                            <strong>{{ $resourceBuilding->level }}</strong></div>
                        <div class="panel-body">
                            <ul>
                                @foreach($cartel->cartelResources as $cartelResource)
                                    @if($cartelResource->resource->name == $resourceBuilding->resource->name)
                                        <li>{{ $cartelResource->resource->name }} produced: <strong>{{ $cartelResource->amount }}g</strong></li>
                                    @endif
                                @endforeach
                                <li>{{ $resourceBuilding->resource->name }} per hour:
                                    <strong>{{ $resourceBuilding->income_per_hour }}g</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
