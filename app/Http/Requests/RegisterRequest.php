<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>'required|max:30|min:5',
            'email'=>'required|unique:users|min:3|max:255',
            'password'=>'required|min:3|max:20',
            'passwordVerifedAt'=>'required|min:3|max:20'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Lütfen email adresinizi girin',
            'email.min'=>'Minimum email alanı için 3 karakter girmelisiniz.',
            'email.max'=>'Maksimum email alanı için 20 karakter girmelisiniz.',
            'email.unique'=>'Email alanını benzersiz doldurunuz',
            'password.required'=>'Lütfen parola giriniz',
            'password.min'=>'Minimum parola alanı için 3 karakter girmelisiniz.',
            'password.max'=>'Maksimum parola alanı için 20 karakter girmelisiniz.',
            'passwordVerifedAt.required'=>'Lütfen parola giriniz',
            'passwordVerifedAt.min'=>'Minimum parola alanı için 3 karakter girmelisiniz.',
            'passwordVerifedAt.max'=>'Maksimum parola alanı için 20 karakter girmelisiniz.'
        ];
    }
}
