<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() // en este segmento se verifica el perfil del usuario que intenta manipular
                                //el modulo de cursos 
    {
        return true; //le asignamo el valor de true para que pase al metodo de rules.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() //en este segmento verificamos las relglas de validacion para nuestro 
                            //modulo curso
    {
        return [
            'name'=>'required|max:20',         //campo requerido con un maximo de 20 digitos
            'category'=>'required',            // campo requerido
            'description'=>'required|min:10',  //campo requerido con un minimo de 10 digitos
            'teacher'=>'required'             //campo requerido
     
                //una vez editados los requerimientos para nuestras validaciones
                // pasamos al formulario que envia este post > la vista create.blade.php
        ];
    }

    public function attributes()
    {
        return [
           'name'=>'Nombre del Curso',
       ]; 

    }

    public function messages()

   {
    return [
        
        'description.required'=>'Debe Ingresar una Descripción Detallada'
    ];
   }
}
