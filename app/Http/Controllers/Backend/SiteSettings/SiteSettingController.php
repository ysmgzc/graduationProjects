<?php

namespace App\Http\Controllers\Backend\SiteSettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSettings;

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
            $site_settings = SiteSettings::where('id', 1)->first();

            $site_settings->title = $request->title;
            $site_settings->url = $request->url;
            $site_settings->statu = $request->statu;
            $site_settings->keywords = $request->keywords;
            $site_settings->description = $request->description;
            $site_settings->updated_at = now();

            if ($request->hasFile('favicon'))
            {
                $imageName = Str::slug($request->title, '-') . '-' . rand(1200, 199999) . '.' . $request->favicon->extension(); // getClientOriginalExtension()
                $request->image->move(public_path('uploads/site_settings'), $imageName);
                $site_settings->image = 'uploads/site_settings/' . $imageName;
            }
            if ($request->hasFile('logo'))
            {
                $imageName = Str::slug($request->title, '-') . '-' . rand(1200, 199999) . '.' . $request->logo->extension(); // getClientOriginalExtension()
                $request->image->move(public_path('uploads/site_settings'), $imageName);
                $site_settings->image = 'uploads/site_settings/' . $imageName;
            }

            $site_settings->save();

            toastSuccess('Güncelleme işlemi başarılı bir şekilde gerçekleştirilmiştir.');
            return redirect()->route('admin.site.settings');

        }
        //        return view('Backend.Site Settings.site_mail_setting', compact('smtp_settings'));
    }
}
