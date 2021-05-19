<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SiteSetting;
use App\Models\Community;
use App\Models\CurrentIssue;
use App\Models\NewsOrganization;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Cache;
use Validator;
use Former;
use Session;
use DB;

class Dashboard extends Controller
{

    public function siteSettings()
    {
        $site_setting = SiteSetting::first();
        if (!Session::has('errors')) {
            Former::populate($site_setting);
        }
        return view('sessions.site-settings', compact('site_setting'));
    }

    public function siteSettingsPost(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'email' => 'required|email',
            'copy_right' => 'required',
            'instagram' => 'required|Url',
            'twitter' => 'required|Url',
            'youtube' => 'required|Url',
            'vimeo' => 'required|Url',
            'post_limit_per_month' => 'required'
        ], [
            'copy_right.required' => 'The copyright text field is required.',
        ]);

        if ($validator->fails()) {
            Former::withErrors($validator);
            return redirect()->back()->withErrors($validator)->withInput()->withError('Please correct following errors!');
        }
        try {
            $site_setting = SiteSetting::first();
            $site_setting->title = $request->title;
            $site_setting->email = $request->email;
            $site_setting->copy_right = $request->copy_right;
            $site_setting->facebook = $request->facebook;
            $site_setting->instagram = $request->instagram;
            $site_setting->twitter = $request->twitter;
            $site_setting->youtube = $request->youtube;
            $site_setting->linkedin = $request->linkedin;
            $site_setting->save();

            return redirect()->back()->with('success', "Settings saved successfully!");
        } catch (\Exception $e) {
            return redirect()->back()->withError('Something went wrong, Please try after sometime.');
        }
    }
}
