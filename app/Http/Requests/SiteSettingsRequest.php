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
            'favicon'=>'mimes:ico|max:100',
            'logo'=>'mimes:image/webp',
        ];
    }

    public function messages()
    {
        return [
            'favicon.mimes' => 'Favicon uzantısının .ico olması gerekmektedir.',
            'favicon.max' => 'Favicon boyutu en fazla 2 MB olmak zorundadır.',
            'logo.mimes' => 'Sitenizde güzel durması için logo uzantısı .webp olması gerekmektedir.',
            'logo.max' => 'Logo boyutu en fazla 200kb olmak zorundadır.'
        ];
    }
}
