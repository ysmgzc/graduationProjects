<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        // Kullanıcı yoksa
        if ($request->email != User::where('email', $request->email)->first())
        {
            // Şifreler aynı değil ise
            if ($request->password != $request->passwordVerifedAt)
            {
                toastError('Şifreler uyuşmuyor.');
                return redirect()->route('login');
            }
            // Şifreler aynı ise
            else
            {
                User::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'email_verified_at'=>now(),
                    'password'=>bcrypt($request->password),
                    'image'=>' ',
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);

                toastSuccess('Kaydınız Başarıyla Gerçekleştirilmiştir. Giriş Yapabilirsiniz.');
                return redirect()->route('login');
            }
        }
        // Kullanıcı varsa
        else
        {
            toastError('Geçerli bir email adresi giriniz.');
            return redirect()->route('login');
        }
    }
}
