<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreTestimonialRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('testimonial_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'title' => [
                'string',
                'nullable',
            ],
            'message' => [
                'required',
            ],
        ];
    }
}
