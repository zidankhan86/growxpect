<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller; 

class SettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    // Setting
    public function general()
    {
        $title     = 'General Settings';
        $settings  = Setting::first();
        $config    = DB::table('config')->get();
        return view('admin.settings', compact('title', 'settings', 'config'));
    }

    // Update Setting
    public function generalStore(Request $request)
    {
        // dd($request->all());

        DB::beginTransaction();
        try {
            $setting                    = Setting::find(1);
            $setting->google_key        = $request->google_key;
            $setting->google_analytics_id = $request->google_analytics_id;
            $setting->site_name         = $request->site_name;
            $setting->email             = $request->email;
            $setting->support_email     = $request->support_email;
            $setting->phone_no          = $request->phone_no;
            $setting->seo_meta_description = $request->seo_meta_desc;
            $setting->seo_keywords      = $request->meta_keywords;
            $setting->tawk_chat_bot_key = $request->tawk_chat_bot_key;
            $setting->application_type  = $request->application_type;
            $setting->facebook_client_id  = $request->facebook_client_id;
            $setting->facebook_client_secret  = $request->facebook_client_secret;
            $setting->google_client_id  = $request->google_client_id;
            $setting->google_client_secret  = $request->google_client_secret;
            $setting->name              = trim($request->mail_sender, " ");
            $setting->address           = trim($request->mail_address, " ");
            $setting->status            = 1;
            $setting->app_mode          = $request->app_mode;
            $setting->email             = $request->email;
            $setting->is_email          = $request->is_email;
            $setting->phone_no          = $request->phone_no;
            $setting->footer_text     = $request->footer_text;

            if ($request->favicon) {
                $favicon = $request->file('favicon');
                $base_name = preg_replace('/\..+$/', '', $favicon->getClientOriginalName());
                $base_name = explode(' ', $base_name);
                $base_name = implode('-', $base_name);
                $base_name = Str::lower($base_name);
                $image_name = $base_name . "-" . uniqid() . "." . $favicon->getClientOriginalExtension();
                $file_path = '/uploads/icon';
                $favicon->move(public_path($file_path), $image_name);
                $setting->favicon = $file_path . '/' . $image_name;
            }

            if ($request->site_logo) {
                $site_logo = $request->file('site_logo');
                $base_name = preg_replace('/\..+$/', '', $site_logo->getClientOriginalName());
                $base_name = explode(' ', $base_name);
                $base_name = implode('-', $base_name);
                $base_name = Str::lower($base_name);
                $image_name = $base_name . "-" . uniqid() . "." . $site_logo->getClientOriginalExtension();
                $file_path = '/assets/uploads/logo';
                $site_logo->move(public_path($file_path), $image_name);
                $setting->site_logo = $file_path . '/' . $image_name;
            }


            if ($request->seo_image) {
                $seo_image = $request->file('seo_image');
                $base_name = preg_replace('/\..+$/', '', $seo_image->getClientOriginalName());
                $base_name = explode(' ', $base_name);
                $base_name = implode('-', $base_name);
                $base_name = Str::lower($base_name);
                $image_name = $base_name . "-" . uniqid() . "." . $seo_image->getClientOriginalExtension();
                $file_path = '/assets/uploads/logo';
                $seo_image->move(public_path($file_path), $image_name);
                $setting->seo_image = $file_path . '/' . $image_name;
            }

            $setting->update();

            $double_site_name = str_replace('"', '', trim($request->site_name, '"'));
            $space_name = str_replace("'", '', trim($double_site_name, "'"));
            $site_name = str_replace(" ", '', trim($space_name, " "));

            // dd($request->share_content);
            if ($site_name) {
                DB::table('config')->where('config_key', 'site_name')->update([
                    'config_value' => $site_name
                ]);
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            $notify[] = ['error', __('messages.toastr.settings_update_error')];
            return redirect()->back()->withNotify($notify);
        }

        DB::commit();

        $notify[] = ['success', __('Settings updated successfully')];
        return redirect()->back()->withNotify($notify);
    }

 

    public function editHomePage(Request $request, $id)
    {
        $sections  = DB::table('pages')->where('page_name', $id)->get();
        $settings  = Setting::first();
        $config    = DB::table('config')->get();

        $section_name = DB::table('pages')->where('page_name', $id)->groupBy('section_name')->orderBy('order_id', 'asc')->get();
        return view('admin.pages.edit-page', compact('sections', 'settings', 'config', 'id', 'section_name'));
    }


}
