<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AfficheCombatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'premier_combatant' => 'bail|required|different:dexieme_combatant|exists:combatants,idcombatants',
            'dexieme_combatant' => 'bail|required|different:premier_combatant||exists:combatants,idcombatants',
        ];
    }
}
