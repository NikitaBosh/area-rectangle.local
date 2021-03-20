<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
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
            'number1' => 'required|numeric|min:0',
            'number2' => 'required|numeric|min:0',
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'number1.required' => 'Введите данные в поле ширина',
            'number1.numeric' => 'Введите число в поле ширина',
            'number1.min' => 'Число должно быть больше :min',
            'number2.required' => 'Введите данные в поле длина',
            'number2.numeric' => 'Введите число в поле длина',
            'number3.min' => 'Число должно быть больше :min',
        ];
    }
}
