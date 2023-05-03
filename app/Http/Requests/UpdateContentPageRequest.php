<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateContentPageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('content_page_edit');
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
