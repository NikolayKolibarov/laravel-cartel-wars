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
                        <div class="panel-heading">{{ $resourceBuilding->name}} - Level: <strong>{{ $resourceBuilding->level }}</strong></div>
                        <div class="panel-body">
                            <ul>
                                <li>{{ $resourceBuilding->resource->name }} produced: <strong>50g</strong></li>
                                <li>{{ $resourceBuilding->resource->name }} per minute: <strong>0,5g</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
