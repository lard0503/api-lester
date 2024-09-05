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

    public function store(Request $request)
    {
        //
        try {
            $player = Player::create ($request->all());
            return response()->json(['status' => 'success', 'message' => 'Jugador creado exitosamente', 'data' => $player]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function show(string $id)
    {
        //
        try{
            $player = Player::findOrfail($id);
            return response()->json(['status' => 'success', 'data' => $player]);

        }catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

}
