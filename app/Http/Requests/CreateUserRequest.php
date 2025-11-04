<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use function Laravel\Prompts\password;

class CreateUserRequest extends FormRequest
{




    /**
     * Get the validation rules that apply to the request.
     *
     * @return
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
            Rule::unique('users', 'email'),
        ],
        'password' => [
            'required',
            Password::min(6)
        ],
    ];

    }
}
