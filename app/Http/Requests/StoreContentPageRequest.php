<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreContentPageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('content_page_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
        ];
    }
}
