<?php

namespace App\Http\Requests;


namespace App\Http\Requests;

use App\Enums\OrderStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateOrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' =>[
                Rule::exists('users','id'),
            ],
            'service_id' =>[
                Rule::exists('services','id'),
            ],
            'status' =>[
                Rule::enum(OrderStatusEnum::class),
            ],
            'total' =>[
                'required',
                'integer',
            ],
        ];
    }
}
