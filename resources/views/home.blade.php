@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{$game->cartel->name}}</h1>
            <p>Current location on map: <strong>[{{$game->map_x}} : {{$game->map_y}}]</strong></p>
        </div>
    </div>
</div>
@endsection
