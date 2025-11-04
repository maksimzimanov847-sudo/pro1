<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return
     */
    public function rules(): array
    {
        return [
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
                'nullable', // Отчество может быть необязательным
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($this->user?->id),
            ],
            'password' => [
                'nullable', // Пароль не обязателен при обновлении
                Password::min(6),
            ],
        ];
    }
}
