<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

use App\Http\Requests;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('player.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = $this->getPositions();
        return view('player.create', compact('positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Player::create($request->all());
        return redirect()->route('player.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::find($id);
        return view('player.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getPositions()
    {
        return array(
            'Goleiro' => 'Goleiro',
            'Zagueiro' => 'Zagueiro',
            'Lateral Direito' => 'Lateral Direito',
            'Lateral Esquerdo' => 'Lateral Esquerdo',
            'Volante' => 'Volante',
            'Meia' => 'Meia',
            'Meia Atacante' => 'Meia Atacante',
            'Ponta' => 'Ponta',
            'Segundo Atacante' => 'Segundo Atacante',
            'Centroavante' => 'Centroavante'
        );
    }
}
