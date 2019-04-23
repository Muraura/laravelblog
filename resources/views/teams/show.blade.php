@extends ('layouts.master')
@section('title','View Team')
@section('content')
<div class="card text-left">
    <div class="card-body">
        <h4 class="card-title">{{ $team->team_name}}</h4>
        <p class="card-text">{{ $team->team_location}}</p>
        <form  class="form-inline" action="/teams/{{ $team->id }}/players" method="post">
        
            @csrf
            <div class="form-group">
              <label for="Player Name "></label>
              <input type="text" name="player_name" id="player_name" class="form-control" placeholder="Player Name" aria-describedby="helpId">
            </div>
            <button type="submit" class= "btn btn-primary">Add Player</button>
        </form>

        @include('layouts.errors')
          @if ($team->players->count()) 
        <table class="table table-striped table-condensed">
            <thead>
              <tr>
                <th>Player</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach($players as  $row)
              <tr>
                <td scope="row">{{ $row->player_name }}</td>
                <td></td>
                <td></td>
              </tr>
            @endforeach
            </tbody>
        </table>
        @endif 
  </div>
</div>
@endsection