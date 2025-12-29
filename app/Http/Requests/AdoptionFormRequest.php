<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdoptionFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'civil_state' => 'required',
            'street' => 'required|string|max:255',
            'number' => 'required|numeric',
            'postal_code' => 'required|string|max:10',
            'locality' => 'required|string|max:255',
            'description_place' => 'required|string',
            'animal_id' => 'required|integer|exists:animals,id',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
