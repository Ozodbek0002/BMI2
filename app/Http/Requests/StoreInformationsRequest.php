<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInformationsRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'mahalla_id' => 'required',
            'full_name' => 'required',
            'position' => 'required',
            'address' => 'required',
            'phone' => 'required|digits:9',
        ];
    }
}
