<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'favicon'=>'mimes:ico',
            'logo'=>'mimes:image/webp',
        ];
    }

    public function messages()
    {
        return [
            'favicon.mimes' => 'Favicon uzantısının .ico olması gerekmektedir.',
            'logo.mimes' => 'Sitenizde güzel durması için logonun image/webp formatında olması gerekmektedir.',
        ];
    }
}
