<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function teams()
    {
        $teams = Team::all();
        return view('teams',compact('teams'));;
    }
}
