<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArtistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2',
            'displayName' => 'required',
            'email' => 'required|email',
        ];
    }

    /**
     * 
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'name field is required!',
            'name.min' => 'name field must be more than 2 character!',
            'displayName.required' => 'display name field is required!',
            'email.required' => 'email field is required!',
            'email.email' => 'invalid email type!',
        ];
    }
}
