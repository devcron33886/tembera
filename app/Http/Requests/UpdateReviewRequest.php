<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateReviewRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('review_edit');
    }

    public function rules()
    {
        return [
            'service_id' => [
                'required',
                'integer',
            ],
            'star_rate' => [
                'string',
                'nullable',
            ],
        ];
    }
}
