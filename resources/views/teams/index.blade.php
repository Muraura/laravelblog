@extends('layouts.master')
@section('title','Teams')

@section('content')
<!-- <a href="/teams/create">Create Team</a> -->
<a name="" id="" class= "btn btn-primary" href="/teams/create" role="button">Create Team</a><br/><br/>

    <table class="table table-striped table-condensed">
      <tr>
        <th>Team</th>
        <th>Location</th>
        <th>Action</th>
        <th>Action</th>
        <th>Action</th>
      </tr>
      @foreach($teams as $row)
      <tr>
        <td>  {{ $row->team_name }}</td>
        <td> {{ $row->team_location }}</td>
        <td>
            <a name="" id="" class= "btn btn-success" href="/teams/{{$row->id}}" role="button">view
          </td>
        <td>
            <!-- <a href="/teams/{{ $row->id }}/edit">Edit</a></td> -->
            <a name="" id="" class= "btn btn-primary" href="/teams/{{ $row->id }}/edit" role="button">Edit
        <td>
        <form action="/teams/{{$row->id}}" method="post">
        {{ csrf_field()}}
        {{ method_field('DELETE')}}

        <button type="submit" class="btn btn-danger btn-sm">
        <i class="fa fa-trash" aria-hidden="true"></i>
      Delete
        
        </form>
    </td>

      </tr>
    
      @endforeach
    </table>
@endsection