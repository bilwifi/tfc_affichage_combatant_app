<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Combatant;
use App\Http\Requests\AfficheCombatRequest;
use Validator;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $combatants = Combatant::JoinCategorie()->get();
        return view('home',compact('combatants'));
    }


    public function redirectionAfficheCombat(AfficheCombatRequest $request)
    {
        return redirect()->route('affiche_combat',[$request->premier_combatant,$request->dexieme_combatant]);
    }

    public function afficheCombatant(Combatant $combatant)
    {
        $combatant = Combatant::JoinCategorie()->find($combatant->idcombatants);
       
        return view('affiche_combatant',compact('combatant'));
    }

     public function afficheCombat(Combatant $premier_combatant,Combatant $dexieme_combatant)
    {
        $premier_combatant = Combatant::JoinCategorie()->find($premier_combatant->idcombatants);
        $dexieme_combatant = Combatant::JoinCategorie()->find($dexieme_combatant->idcombatants);
        // dump($premier_combatant);
        // dd($dexieme_combatant);
        return view('affiche_combat',compact('premier_combatant','dexieme_combatant'));
    }

    // UPLOAD IMG


    public function showJqueryImageUpload(Combatant $combatant) 
    {
        return view('uploade',compact('combatant'));
    }

    /**
     * To handle the comming post request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveJqueryImageUpload(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'profile_picture' => 'required|image|max:1000',
            'idcombatants' => 'required|exists:combatants',
        ]);
        if ($validator->fails()) {
            
            return $validator->errors();            
        }


        $status = "";

        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            // Rename image
            $filename = time().'.'.$image->guessExtension();
            
            $path = $request->file('profile_picture')->storeAs(
                 'profile_pictures', $filename
            );
            $combatant = Combatant::find($request->idcombatants);
            $combatant->picture = $path;
            $combatant->save();
            $status = "uploaded";            
        }
        
        return response($status,200);
    }

}
