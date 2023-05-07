<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('setting_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
            'email' => [
                'required',
            ],
            'mobile' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'instagram' => [
                'string',
                'required',
            ],
            'facebook' => [
                'string',
                'required',
            ],
            'twitter' => [
                'string',
                'required',
            ],
            'linkedin' => [
                'string',
                'nullable',
            ],
            'google' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'required',
            ],
        ];
    }
}
