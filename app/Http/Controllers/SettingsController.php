<?php

namespace App\Http\Controllers;
use Session;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.settings.settings')->with('settings', Setting::first());
    }
    
    public function update()
    {
       $this->validate(request(), [
           'site_name' => 'required',
           'contact_email' => 'required'
       ]);
        $settings = Setting::first();

        $settings->site_name = request()->site_name;
        $settings->contact_email = request()->contact_email;

        $settings->save();
        Session::flash('success', 'Settings updated.');
        return redirect()->back();
    }
}
