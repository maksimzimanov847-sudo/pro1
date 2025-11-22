<?php

namespace App\Http\Requests;

use App\Enums\ServiceTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateServiceRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:150'
            ],
            'description' => [
                'required',
                'string',
                'max:255',

            ],
            'price' => [
                'required',
                'integer'
            ],
        ];
    }
}
