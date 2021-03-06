@extends ('layouts.app')
@section('content')
<div class="container">
    <form action = "/players"  method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="player_name">Player Name</label>
            <input type="text" name="player_name" id="player_name" value="{{ old('player_name')}}" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="title_help" class="text-muted">Enter player name</small>
        </div>
        <div class="form-group">
            <label for="team_name">Team Name</label>
            <select class="custom-select my-1 mr-sm-2"  id="team_id" name="team_id">
                <option value= "">Select a team</option>
                    @foreach($teams as $team)
                      <option value= "{{$team->id}}" 
                        @if ($team->id == old('team_id', $team->option))
                        selected="selected"
                        @endif
                    >{{ $team->team_name }}</option>
                    @endforeach
            </select>
</select>
        </div>
        
        <div class="form-group">
            <a href="/players" class="btn btn-primary"> Back </a>
            <button type="submit" class="btn btn-primary"> Add Player</button>
        </div>
        </form>
        {{-- $include(layouts.errors); --}}
    @endsection
</div>




















