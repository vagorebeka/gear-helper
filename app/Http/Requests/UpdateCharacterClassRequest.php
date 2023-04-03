<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCharacterClassRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'string|max:100',
            'stat1' => 'string|min:3|max:3',
            'stat2' => 'string|min:3|max:3',
            'stat3' => 'string|min:3|max:3',
            'stat4' => 'string|min:3|max:3',
            'stat5' => 'string|min:3|max:3'
        ];
    }
}
