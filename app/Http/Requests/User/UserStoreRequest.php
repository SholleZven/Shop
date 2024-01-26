<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|unique',
            'password' => 'required|string|confirmed',
            'surname' => 'required|string',
            'patronymic' => 'required|string',
            'age' => 'required|integer',
            'address' => 'required|string',
            'gender' => 'required|integer',
        ];
    }
}
