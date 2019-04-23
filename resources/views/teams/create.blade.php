@extends ('layouts.master')
@section ('title','Create Team')
@section('content')
<a href="/teams">Back</a>

<form action = "/teams" method="post">
{{ csrf_field() }}


<div>
   <label for="team_name">Team Name</label>
   <input type="text" name="team_name" id="team_name" value="{{ old('team_name')}}">
</div>
<div>
   <label for="team_location">Team Location</label>
   <input type="text" name="team_location" id="team_location" value="{{ old('team_location')}}">
</div>
<div>
    <button type="submit">AddPlayer</button>
</div>




</form>
{{-- $include('layouts.errors'); --}}

@endsection