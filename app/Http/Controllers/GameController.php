<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Console;
use Illuminate\Http\Request;
use App\Http\Requests\GameEditRequest;
use App\Http\Requests\GameCreateRequest;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $consoles = Console::all();
        return view('games.create', compact('consoles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GameCreateRequest $request)
    {
        $game = Game::create([
            "name"=>$request->nome,
            "description"=>$request->descrizione,
            "img"=>$request->file('immagine')->store('public/media'),
        ]);

        $game->consoles()->attach($request->consoles);

       return redirect(route('games.index'))->with('success', 'Gioco pubblicato con successo');
  
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        $consoles = Console::all();
        return view('games.edit', compact('game', 'consoles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GameEditRequest $request, Game $game)
    {
        $game->update([
            "name"=>$request->nome,
            "description"=>$request->descrizione,
            "img"=>$request->immagine ? $request->file('immagine')->store('public/media'):  $game->img,
        ]);
        $game->consoles()->detach();
        $game->consoles()->attach($request->consoles);
        return redirect(route('games.index', compact('game')))->with('success', 'Gioco modificato con successo');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
