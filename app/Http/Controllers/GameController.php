<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Returnera alla rader i tabell
        return Game::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validera input
        $request->validate([
            'name' => ' required',
            'hours' => 'required',
            'finished' => 'required'
        ]);

        // Lägga till spel
        return Game::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Lagra spelets ID i variabel
        $game = Game::find($id);
        
        // Kontroll om ID existerar
        if($game != null) {

            // Returnera specifikt spel
            return Game::find($id);
        } else {

            // Skickar felmeddelande om ID ej existerar
            return response()->json([
                'Spel hittades ej.'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Lagra spelets ID i variabel
        $game = Game::find($id);

        // Kontroll om ID existerar
        if($game != null) {

            // Validera input
            $request->validate([
            'name' => ' required',
            'hours' => 'required',
            'finished' => 'required'
        ]);

            // Uppdatera information
            $game->update($request->all());
            return $game;

        } else {

            // Skickar felmeddelande om ID ej existerar
            return response()->json([
                'Spel hittades ej.'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Lagra spelets ID i variabel
        $game = Game::find($id);

        // Kontroll om ID existerar
        if($game != null) {

            // Radera spel
            $game->delete();
            return response()->json([
                'Spel raderat.'
            ]);
        } else {

            // Skickar felmeddelande om ID ej existerar
            return response()->json([
                'Spel hittades ej.'
            ], 404);
        }
    }
}
