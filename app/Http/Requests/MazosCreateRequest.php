<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MazosCreateRequest extends Request
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
            'MAZ_NOMBRE' => 'required|unique:mazos|max:50',
            'FTO_ID' => 'required',
        ];
    }
    
    
    public function messages()
{
    return [
        'MAZ_NOMBRE.required' => 'Nombre es obligatorio',
        'MAZ_NOMBRE.unique' => 'Nombre ya se encuentra registrado',
        'MAZ_NOMBRE.max' => 'Nombre es demasiado largo',
        'FTO_ID.required'  => 'Debe seleccionar un formato',
    ];
}
    
}
