<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => [
                'required',
                Rule::exists('users', 'id')
            ],
            'service_id' => [
                'required',
                Rule::exists('services', 'id')
            ],
            'rating' => [
                'required',
                'integer',
                'min:1',
                'max:5'
            ],
            'comment' => [
                'required',
                'string',
                'max:255'
            ]
        ];
    }
}
