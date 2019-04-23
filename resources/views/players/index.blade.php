@extends('layouts.master')
@section('title','Teams')
@section('content')
<div class="container">
<a name="" id="" class= "btn btn-primary" href="/players/create" role="button">Create Player</a><br/><br/>
    <table class="table table-striped table-condensed">
      <tr>
        <th>Player</th>
        <th>Team</th>
        <th>Action</th>
        <th>Action</th>
        <th>Action</th>
      </tr>
      @foreach($players as $row)
      <tr>
        <td>  {{ $row->player_name }}</td>
        <td>  
            @foreach($teams as $team)
                @if($team->id == $row->team_id)
                  {{ $team->team_name }}
                @endif
             @endforeach
        </td>
        <td>
            <a name="" id="" class= "btn btn-success" href="/players/{{$row->id}}" role="button">view
        </td>
        <td>
            <a name="" id="" class= "btn btn-primary" href="/players/{{ $row->id }}/edit" role="button">Edit
        </td>
        <td>
            <form action="/players/{{$row->id}}" method="post">
                {{ csrf_field()}}
                {{ method_field('DELETE')}}
                <button type="submit" class="btn btn-danger btn-sm">
                <i class="fa fa-trash" aria-hidden="true"></i>Delete
            </form>
        </td>
      </tr>
     @endforeach
    </table>
</div>
@endsection