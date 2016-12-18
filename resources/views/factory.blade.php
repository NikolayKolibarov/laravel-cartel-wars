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
                            <div class="col-md-3 col-md-offset-2">
                                <h1>{{ $resourceBuilding->name }}</h1>
                            </div>
                            <div class="col-md-4 ">
                                <h1>Price: ${{ $resourceBuilding->price }}</h1>
                            </div>
                            <div class="col-md-2">
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
