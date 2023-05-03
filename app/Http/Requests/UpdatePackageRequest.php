<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePackageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('package_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:packages,title,'.request()->route('package')->id,
            ],
            'featured_image' => [
                'required',
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
