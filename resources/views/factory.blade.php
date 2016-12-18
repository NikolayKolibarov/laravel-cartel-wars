@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Factory</h1>
        </div>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">

                    @foreach($cartelType->resourceBuildings as $resourceBuilding)
                        <div class="row">
                            <div class="col-md-6">
                                <h1>{{ $resourceBuilding->name }}</h1>
                                <h3>Price: <strong>${{ $resourceBuilding->price }}</strong></h3>
                                <h3>{{ $resourceBuilding->resource->name }} per hour:
                                    <strong>${{ $resourceBuilding->income_per_hour }} </strong></h3>
                                <form action="">
                                    <button class="btn btn-default">Build</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>


    </div>
@endsection
