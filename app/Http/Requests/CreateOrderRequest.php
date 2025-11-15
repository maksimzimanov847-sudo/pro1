<?php

namespace App\Http\Requests;

use App\Enums\OrderStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateOrderRequest extends FormRequest
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
                Rule::exists('users', 'id'),
            ],
            'service_id' => [
                Rule::exists('services', 'id'),
            ],
            'status' => [
                Rule::enum(OrderStatusEnum::class),
            ],
            'total_price' => [
                'required',
                'integer',
            ],
        ];
    }
}
