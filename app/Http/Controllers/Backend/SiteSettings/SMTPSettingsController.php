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
}
