<?php

namespace App\Http\Controllers\Backend\SiteSettings;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        return view('Backend.Site_Settings.site_contact');
    }
    public function update(Request $request, $id)
    {
        if (Auth::check())
        {
            $contact = Contact::where('id', 1)->first();

            $contact->whatsapp = $request->whatsapp;
            $contact->facebook = $request->facebook;
            $contact->instagram = $request->instagram;
            $contact->twitter = $request->twitter;
            $contact->address = $request->address;
            $contact->contact_mail = $request->contact_mail;
            $contact->updated_at = now();
            $contact->save();
            toastSuccess('Başarılı bir şekilde güncelleme işlemi gerçekleştirilmiştir.');
            return redirect()->route('admin.contact.settings');
        }
        else
            return redirect()->back();
    }
}
