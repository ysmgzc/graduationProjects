<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AdminProfilRequest extends FormRequest
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
            'email' => 'email:rfc,dns|unique:users, email, {$this->email->id}',
            'image' => 'mimes:jpeg, jpg, png|dimensions:max_width:350,max_height:350'
        ];
    }

    public function messages()
    {

        return [
            'email.unique' => 'Geçerli bir email adresi giriniz.'
        ];
    }
}
