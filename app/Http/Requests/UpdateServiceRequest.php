<?php

namespace App\Http\Requests;

use App\Enums\ServicesTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateServiceRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'role' =>[
                Rule::enum(ServiceTypeEnum::class),
            ],
            'title' => [
                'required',
                'string',
                'max:150'
            ],
            'description' => [
                'required',
                'string'

            ],
            'price' => [
                'required',
                'integer'

            ],
        ];
    }
}
