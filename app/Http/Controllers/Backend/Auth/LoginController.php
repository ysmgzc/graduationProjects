<?php

namespace App\Http\Controllers\Backend\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin()
    {
        if (Auth::check())
        {
            toastInfo('Tekrardan hoşgeldiniz.');
            return redirect()->route('admin.index');
        }
        return view('Backend.Auth.login');
    }
    public function login(LoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;
        $remember = $request->remember;
        /*
        if ($remember)
            $remember = true;
        else
            $remember =false;
        */
        !is_null($remember) ? $remember = true : $remember = false;
//        1- Login işlemi alternatif. Direk olarak kullanıcının login olmasını sagliyor
//        Auth::attempt(['email'=>$request->email, 'password'=>$request->password]);

//        2- Kullanıcı var mı yok mu diye kontrol yaparak giriş işlemini gerçekleşitiryoruz.
        $user = User::where('email', $email)->where('statu', 1)->first();
        if ($user)
        {
            // kullanıcı sifresi dogru mu
            if(Hash::check($password, $user->password))
            {
                // kullanıcıyı login yapma
                Auth::login($user, $remember);
                return redirect()->route('admin.index');
            }
            else
            {
                toastError('Hatalı  giriş');
                return redirect()->route('login');
            }


        }
        else
        {
            toastError('Böyle bir kullanıcı bulunamadı');
            return redirect()->route('login');
        }
//        dd($request->all());
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
