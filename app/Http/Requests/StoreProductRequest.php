<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => ['required', 'max:255', 'min:2', 'string'],
            'price' => ['required', 'max:255'],
            'quantity' => ['required', 'max:255', 'integer'],
            'description' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo Obrigatório',
            'name.max' => 'Máximo de :max caracteres',
            'name.min' => 'Mínimo de :min caracteres',
            'name.string' => 'O campo deve ser uma frase',
            'price.required' => 'Campo Obrigatório',
            'price.max' => 'Máximo de :max caracteres',
            'quantity.required' => 'Campo Obrigatório',
            'quantity.max' => 'Máximo de :max caracteres',
            'quantity.integer' => 'O valor tem que ser um inteiro',
            'description.required' => 'Campo Obrigatório',
        ];
    }
}
