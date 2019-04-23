<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Player;
use App\Team;
class PlayersController extends Controller
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
         $teams= Team::all();
         $players= Player::all();
        return view('players.index', compact('players','teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $teams= Team::all();
        return view("players.create",compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'player_name'=>'required',
            'team_id'=>'required',
        ]);
        $player = new Player;
        $player->player_name = $request->input('player_name');
        $player->team_id = $request->input('team_id');
        $player->save();
         return redirect('players')->with('success','Player Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $teams= Team::all();
        $team= Team::find($id);
        $player= Player::find($id);
        return view('players.show', compact('player','team','teams'));
        // $teams = $player->teams;
        // return view('players.show', compact("teams","player"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    
    {
        
        $teams= Team::all();
        // dd($teams);
        return view('players.edit', compact("player","teams"));
        
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
        $player->player_name=request('player_name');
        $player->team_id=request('team_id');
        $player->save();
        return redirect('/players')->with('success','Player Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect('/players')->with('success','Player Deleted Successfully');
        
    }
}
