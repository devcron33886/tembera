<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreTagRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('tag_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
