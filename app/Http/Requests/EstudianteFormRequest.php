<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteFormRequest extends FormRequest
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
            'nombre' => 'required',
            'num_id' => 'required',
            'genero' => 'required',
            'grado' => 'required',
            'fecha_matricula' => 'required',
            'fecha_nac' => 'required',
            'nombre_padre' => 'required',
            'nombre_madre' => 'required',
            'correo_acudiente' => 'required',
            'eps' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'num_id.required' => 'El documento de identidad es un campo requerido',
            'nombre.required' => 'El nombre es un campo requerido',
            'genero.required' => 'El género es un campo requerido',
            'grado.required' => 'El grado es un campo requerido',
            'fecha_matricula.required' => 'La fecha de matricula es un campo requerido',
            'fecha_nac.required' => 'La fecha de nacimiento es un campo requerido',
            'nombre_padre.required' => 'El nombre del padre es un campo requerido',
            'nombre_madre.required' => 'El nombre  de la madre es un campo requerido',
            'correo_acudiente.required' => 'El correo del acudiente es un campo requerido',
            'eps.required' => 'La eps es un campo requerido',
            //'email.email' => 'El correo debe tener un formato correcto',
        ];
    }
}
