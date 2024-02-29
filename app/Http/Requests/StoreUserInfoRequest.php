<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string|min:10|max:11',
            'note' => 'nullable|string',
            'province_id' => 'required|numeric',
            'district_ids' => 'required|array',
            'min_price' => 'required|numeric',
            'max_price' => 'required|numeric',
        ];
    }
}
