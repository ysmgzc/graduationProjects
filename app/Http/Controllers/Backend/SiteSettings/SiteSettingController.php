<?php

namespace App\Http\Controllers\Backend\SiteSettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SiteSettingController extends Controller
{
    public function index()
    {
        $site_settings = SiteSettings::where('id', 1)->first();
//        dd($smtp_settings);
        return view('Backend.Site Settings.site_setting', compact('site_settings'));
    }

    public function update(Request $request)
    {
        if (!SiteSettings::where('id', $request->id)->first())
        {
            toastError('Güncelleme işlemi gerçekleştirilememiştir.');
            return redirect()->route('admin.site.settings');
        }
        else
        {
            if (Auth::check())
            {
                $site_settings = SiteSettings::where('id', 1)->first();

                $site_settings->title = $request->title;
                $site_settings->url = $request->url;
                $site_settings->statu = $request->statu;
                $site_settings->keywords = $request->keywords;
                $site_settings->description = $request->description;
                $site_settings->updated_at = now();
                if($request->statu == 1)
                    $site_settings->statu = 1;
                else if ($request->statu == 0)
                    $site_settings->statu = 0;
                else
                {
                    toastError('Geçersiz işlem gerçekleştirmeye çalışıyorunuz.');
                    return redirect()->back();
                }

                if ($request->hasFile('favicon'))
                {
                    $imageName = Str::slug($request->title, '-') . '-' . rand(1200, 199999) . '.' . $request->favicon->extension(); // getClientOriginalExtension()
                    $request->favicon->move(public_path('uploads/site_settings'), $imageName);
                    $site_settings->favicon = 'uploads/site_settings/' . $imageName;
                }
                if ($request->hasFile('logo'))
                {
                    $imageName = Str::slug($request->title, '-') . '-' . rand(1200, 199999) . '.' . $request->logo->extension(); // getClientOriginalExtension()
                    $request->logo->move(public_path('uploads/site_settings'), $imageName);
                    $site_settings->logo = 'uploads/site_settings/' . $imageName;
                }

                $site_settings->save();

                toastSuccess('Güncelleme işlemi başarılı bir şekilde gerçekleştirilmiştir.');
                return redirect()->route('admin.site.settings');
            }
            else
            {
                toastError('Geçersiz işlem.');
                return redirect()->back();
            }
        }
        //        return view('Backend.Site Settings.site_mail_setting', compact('smtp_settings'));
    }
}
