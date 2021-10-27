<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    //
    public function showPasswordForm()
    {
        return view('Backend.Auth.reset_password');
    }

    public function reset(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();

        if ($user)
        {
//             40 karakter boyutunda bir adet token oluştur
            $user->reset_password_token = Str::random(40);
            $user->reset_password_expired = Carbon::now()->addSecond(120);
            $user->save();

            $mail = new ResetPasswordMail($user);
            Mail::to($user->email)->send($mail);
        }

        dd($request->all());
    }
}
