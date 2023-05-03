<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('booking_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'package_id' => [
                'required',
                'integer',
            ],
            'check_in_date' => [
                'required',
                'date_format:'.config('panel.date_format').' '.config('panel.time_format'),
            ],
            'check_out_date' => [
                'date_format:'.config('panel.date_format'),
                'nullable',
            ],
            'mobile' => [
                'string',
                'nullable',
            ],
        ];
    }
}
