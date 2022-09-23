<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [    
            'nome' => ['required', 'min:3'],
            'numbTemporadas' => ['required'],
            'numbEpisodios' => ['required']];
    }

    public function messages(){
        return [
            'nome.required' => 'O nome é obrigatório', 
            'nome.min' => 'O nome deve ter no mínimo :min caracteres',
            'numbTemporadas.required' => 'O N° de temporadas é obrigatório', 
            'numbEpisodios.required' => 'O N° de episódios é obrigatório'
        ];
    }
}
