<?php

namespace App\Http\Controllers;

use App\Championship;
use Illuminate\Http\Request;

use App\Http\Requests;

class ChampionshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $championships = Championship::all();

        foreach($championships as $championship)
        {
            $championship->type = $this->getTypesAsText($championship->type);
        }

        return view('championship.index', compact('championships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = $this->getTypesOfChampionship();
        return view('championship.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Championship::create($request->all());
        return redirect()->route('championship.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $championship = Championship::find($id);
        $championship->type = $this->getTypesAsText($championship->type);
        return view('championship.show', compact('championship'));
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

    private function getTypesOfChampionship()
    {
        return array(
            1 => 'Pontos Corridos',
            2 => 'Mata-Mata',
            3 => 'Grupos'
        );
    }

    private function getTypesAsText($type)
    {
        $types = $this->getTypesOfChampionship();
        return $types[$type];
    }
}
