<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\GestionCombatantDataTable;
use App\Models\Combatant;
use Flashy;

class GestionCombatants extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GestionCombatantDataTable $dataTables)
    {
        return $dataTables->render('gestion_combatants');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $combatant = Combatant::create($request->all());
        Flashy::info('Ajouter une photo de profil pour ' .$combatant->nom);
        return redirect()->route('upload-img-combatant',$combatant->idcombatants);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Combatant::destroy($id);
        Flashy::error('Supprimé avec succèss');
        return redirect()->back();


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
        dd('Bil');
        Combatant::destroy($id);
    }
}
