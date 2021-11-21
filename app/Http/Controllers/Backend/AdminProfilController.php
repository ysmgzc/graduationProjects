<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminProfilController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            $user = User::where('id', Auth::user()->id)->first();
            return view('Backend.AdminProfil.profil', ['user'=>$user]);
        }
        else
        {
            toastError('Geçersiz işlem');
            return redirect()->back();
        }

    }
    public function update(Request $request, $id)
    {

        if (Auth::check())
        {
            if (Auth::user()->id ==  $id)
            {

                $admin = User::where('id', Auth::user()->id)->first();

                $admin->name = $request->name;
                $admin->email = $request->email;
                $admin->password = bcrypt($request->password);
                $admin->name = $request->name;
                if ($request->hasFile('image'))
                {
                    $imageName = Str::slug($request->title, '-') . '-' . rand(1200, 199999) . '.' . $request->favicon->extension(); // getClientOriginalExtension()
                    $request->favicon->move(public_path('uploads/site_settings'), $imageName);
                    $admin->favicon = 'uploads/site_settings/' . $imageName;
                }
                toastSuccess('Güncelleme işlemi başarılı bir şekilde gerçekleştirilmiştir.');
                return view('Backend.AdminProfil.profil');
            }
        }
        else
        {
            toastError('Geçersiz işlem');
            return redirect()->back();
        }
    }
}
