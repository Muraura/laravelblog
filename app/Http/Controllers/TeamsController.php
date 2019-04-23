<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Player;
use App\Team;
// use App\Mail\TeamCreated;
class TeamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         // $teams = Team::all();
        // $teams=auth()->user()->teams;
          $teams = Team::where('user_id',auth()->id())->get(); 
          return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("teams.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'team_name'=>'required',
            'team_location'=>'required',
        ]);
        $attributes['user_id']= auth()->id();
        Team::create($attributes);
        // \Mail::to($team->user->email)->send(
        //    new TeamCreated($team)
        // );
        return redirect('/teams');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {

        $players = $team->players;
        $this->authorize('update',$team);
        return view('teams.show', compact("team","players"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    
    {
        
        return view('teams.edit', compact("team"));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $this->authorize('update',$team);
        $attributes = $this->validates($request);
        $team->update($attributes);
         return redirect('/teams');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect('/teams');
        
    }
}
