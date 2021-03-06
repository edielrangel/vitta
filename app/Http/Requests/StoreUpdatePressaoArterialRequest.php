<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePressaoArterialRequest extends FormRequest
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
            'dataAfericao' => 'required|date|before:tomorrow',
            'localAfericao' => 'required',
            'observacao' => 'max:200',
            'pas' => 'required|integer|min:0',
            'pad' => 'required|integer|min:0',
        ];
    }
}
