<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'address'=> 'required|string|max:225',
            'city' => 'required|string|max:225',
            'country' => 'required|string|max:225',
            'postal' => 'nullable|string|max:225',
            'email' => 'nullable|email:rfc,dns',
            'phone' => 'required|numeric|digits_between:10,20',
            'notes' => 'nullable|string|max:225',
        ];
    }
}