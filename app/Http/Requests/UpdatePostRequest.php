<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('post_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'body' => [
                'required',
            ],
            'featured_image' => [
                'required',
            ],
            'author_id' => [
                'required',
                'integer',
            ],
            'categories.*' => [
                'integer',
            ],
            'categories' => [
                'required',
                'array',
            ],
            'tags.*' => [
                'integer',
            ],
            'tags' => [
                'array',
            ],
        ];
    }
}
