@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Cartels</h1>
        </div>

        <div class="row">
            @foreach($cartels as $cartel)
                <div class="col-md-4 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $cartel->cartelType->name }} - Level: <strong>{{ $cartel->level }}</strong></div>
                        <div class="panel-body">
                            <ul>
                                <li>Location: <strong>({{ $cartel->location_x }}, {{ $cartel->location_y }})</strong></li>
                                <li>Money: <strong>${{ $cartel->money }}</strong></li>
                                @foreach($cartel->cartelResources as $cartelResource)
                                    <li>{{ $cartelResource->resource->name }} produced: <strong>{{ $cartelResource->amount }}g</strong></li>
                                @endforeach
                            </ul>
                            <a href="{{ route('cartel-details', ['cartel_id' => $cartel->id]) }}" class="btn btn-default">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
