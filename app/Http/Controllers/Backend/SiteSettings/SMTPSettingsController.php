<?php

namespace App\Http\Controllers\Backend\SiteSettings;

use App\Http\Controllers\Controller;
use App\Models\Smtp_settings;
use Illuminate\Http\Request;

class SMTPSettingsController extends Controller
{
    public function index()
    {
        $smtp_settings = Smtp_settings::where('id', 1)->first();
//        dd($smtp_settings);
        return view('Backend.Site Settings.site_mail_setting', compact('smtp_settings'));
    }

    public function update(Request $request)
    {
        if (!Smtp_settings::where('id', $request->id)->first())
        {
            toastError('Güncelleme işlemi gerçekleştirilememiştir.');
            return redirect()->route('admin.site.mail.settings');
        }
        else
        {
            $smpt_settings = Smtp_settings::where('id', 1)->first();

            $smpt_settings->server_name = $request->smtp_server_name;
            $smpt_settings->username = $request->smtp_username;
            $smpt_settings->password = $request->smtp_password;
            $smpt_settings->encryption = $request->smtp_encryption;
            $smpt_settings->port = $request->smtp_port;
            $smpt_settings->updated_at = now();

            $smpt_settings->save();

            toastSuccess('Güncelleme işlemi başarılı bir şekilde gerçekleştirilmiştir.');
            return redirect()->route('admin.site.mail.settings');

        }
        //        return view('Backend.Site Settings.site_mail_setting', compact('smtp_settings'));
    }
}
