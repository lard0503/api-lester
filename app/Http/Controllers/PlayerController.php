<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    //
    public function index()
    {
        //$players = Player::all();
        //$players = Player::orderBy('first_name')->get();
        $players = Player::select('first_name as Nombre', 'last_name as Apellido', 'team as Equipo', 'position as Posicion', 'number as Dorsal')->orderBy('team')->orderBy('number') ->get();
        return response()->json(['status' => 'success', 'data' => $players]);   
    }
}
