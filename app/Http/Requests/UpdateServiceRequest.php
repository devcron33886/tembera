<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:services,name,'.request()->route('service')->id,
            ],
            'price' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
