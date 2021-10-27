<p>
<Sayı><b>{{$user->name}}</b></Sayı>
</p>
<p>Bu maili şifre sıfırlama isteğiniz üzere almaktasınız.
    <br>
    <br>
    <a href="{{route('resetPassword.showForm', $user->reset_password_token)}}">Şifremi sıfırla</a>
</p>
