<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StorePackageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('package_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:packages',
            ],

            'price' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'unit_price' => [
                'string',
                'required',
            ],
        ];
    }
}
