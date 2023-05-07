<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBookingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('booking_edit');
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
