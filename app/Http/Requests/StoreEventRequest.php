<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('event_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'starting_date' => [
                'required',
                'date_format:'.config('panel.date_format'),
            ],
            'ending_date' => [
                'date_format:'.config('panel.date_format'),
                'nullable',
            ],
            'featured_image' => [
                'required',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
