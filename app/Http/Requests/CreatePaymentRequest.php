<?php

namespace App\Http\Requests;


namespace App\Http\Requests;

use App\Enums\Payment\PaymentMethodEnum;
use App\Enums\Payment\PaymentStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreatePaymentRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'order_id' =>[
                Rule::exists('orders','id'),
            ],
            'status' =>[
                Rule::enum(PaymentStatusEnum::class),
            ],
            'method' =>[
                Rule::enum(PaymentMethodEnum::class),
            ],
        ];
    }
}
