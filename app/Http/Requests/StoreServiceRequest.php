<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:services',
            ],
            'price' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'description' => [
                'required',
            ],
        ];
    }
}
