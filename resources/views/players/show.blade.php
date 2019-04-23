@extends('layouts.master')
<div class="container">
    @section('content')
    <a href="/players" class="btn btn-primary">Go Back</a>
    <h1> Player Name:</h1><h3>{{$player->player_name}}<h3>
    <div>
           @foreach($teams as $team)
            @if($player->team_id == $team->id)
    <h1>Team Name:</h1><h3>{{ $team->team_name }}</h3>
                      @endif
            @endforeach
                  
                      
              
            

    </div> 
  
@endsection