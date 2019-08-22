<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Combatant extends Model
{
    protected $primaryKey = 'idcombatants';
     protected $fillable = [
        'nom','postnom','prenom','idcategories','poid'
    ];
    public $timestamps = false;


    /**********
    * SCOPES 
    **********/

    /**
    * Joindre categorie 
    */

    public static function scopeJoinCategorie($query){

     return $query->leftJoin('categories', 'categories.idcategories', '=', 'combatants.idcategories');

    }



    
}
