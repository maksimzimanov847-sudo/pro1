<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use function Laravel\Prompts\password;

class CreateUserRequest extends FormRequest
{


    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array

    {return [
        'name' => [
            'required',
            'string',
            'max:255',
        ],
        'surname' => [
            'required',
            'string',
            'max:255',
        ],
        'patronymic' => [
            'required',
            'string',
            'max:255',
        ],
        'email' => [
            'required',
            'email',
            'max:255',
            Rule::unique('users', 'email')->ignore($user->id),
        ],
        'password' => [
            'required',
            password::min(6)
        ],
    ];

    }
}
