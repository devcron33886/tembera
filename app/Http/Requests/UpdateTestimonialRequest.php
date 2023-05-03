<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTestimonialRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('testimonial_edit');
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
