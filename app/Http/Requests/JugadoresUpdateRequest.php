<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class JugadoresUpdateRequest extends Request
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
            'JGD_NOMBRE' => 'required|max:255',
            'JGD_DCI' => 'required|unique:jugadores|max:255',
        ];
    }
    
    
    public function messages()
    {
        return [
            'JGD_NOMBRE.required' => 'Nombre es obligatorio',
            'JGD_DCI.unique' => 'DCI ya se encuentra registrado',
            'JGD_DCI.max' => 'DCI es demasiado largo',
        ];
    }
    
    
}
