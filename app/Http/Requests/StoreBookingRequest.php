<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'number_of_people' => [
                'required', 'min:1', 'integer',
            ],
            'package_id' => [
                'required',
                'integer',
            ],
            'check_in_date' => [
                'required',
            ],
            'check_out_date' => [
                'nullable',
            ],
            'mobile' => [
                'string',
                'required',
            ],

            'email' => [
                'required',
                'email',
            ],
            'message' => [
                'string',
                'max:500',
            ],

        ];
    }
}
