<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterClassRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'stat1' => 'required|string|min:3|max:3',
            'stat2' => 'required|string|min:3|max:3',
            'stat3' => 'required|string|min:3|max:3',
            'stat4' => 'required|string|min:3|max:3',
            'stat5' => 'required|string|min:3|max:3'
        ];
    }
}
