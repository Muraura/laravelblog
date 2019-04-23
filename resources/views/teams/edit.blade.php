@extends('layouts.master')
 

@section('title', 'Edit Team')
 

@section('content')

 <h3>Edit Team </h3>

 <form action="/teams/{{ $team->id}}" method="post">
 
 {{method_field('PATCH') }}
 {{ csrf_field() }}
 

 <div class="form-group">

 <label for="team">Team name</label>

 <input type="text" name="team_name" id="team_name" class="form-control" placeholder="" aria-describedby="helpId" value=
 "{{$team->team_name}}">

 <small id="team_name_help" class="text-muted">enter team name</small>
 </div>

 <div class="form-group">

 <label for="">Team location</label>

 <input type="text" name="team_location" id="team_location" class="form-control" placeholder="" aria-describedby="helpId" value="{{$team->team_location}}">

 <small id=" team_location_help" class="text-muted">Enter team location</small>

 </div>

 <div class="form-group">

 <a href="/teams" class="btn btn-primary"> Back </a>

 <button type="submit" class="btn btn-primary"> Edit Team</button>

 </div>

 </form>

@endsection