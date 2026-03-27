<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class StoreCardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name'         => 'required|string|max:150',
            'description'  => 'required|string',
            'type_id'      => 'required|exists:types,id',
            'attribute_id' => 'nullable|exists:attributes,id',
            'image'        => 'nullable|image|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'    => 'Le nom est obligatoire.',
            'type_id.exists'   => 'Le type sélectionné est invalide.',
        ];
    }
}
