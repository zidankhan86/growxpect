<?php

namespace App\Http\Controllers;

use App\Mail\SendContact;
use App\Models\Category;
use App\Models\Contact;
use App\Models\HomepageContent;
use App\Models\CustomPage;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    private function seo($title = null, $description = null)
    {
        $setting = getSetting();

        return [
            'title'          => $title ?? $setting->site_name,
            'og_title'       => $title ?? $setting->site_name,
            'og_description' => $description ?? $setting->seo_meta_description,
            'og_image'       => $setting->site_logo,
            'meta_keywords'  => $setting->seo_keywords,
        ];
    }

    public function index()
    {
        $data = $this->seo('About Us');
        $data['settings']         = getSetting();
        $data['hero']             = HomepageContent::section('hero');
        $data['socialProof']      = HomepageContent::section('social_proof');
        $data['proofGallery']     = HomepageContent::section('proof_gallery');
        $data['challengeDetails'] = HomepageContent::section('challenge_details');
        $data['courseModule']     = HomepageContent::section('course_module');
        $data['whyListen']        = HomepageContent::section('why_listen');
        $data['footer']           = HomepageContent::section('footer');

        return view('frontend.home', $data);
    }

  

    public function about()
    {
        $data = $this->seo('About Us');
        return view('frontend.pages.about', $data);
    }

    public function team()
    {
        $data = $this->seo('Our Team');
        $data['teams'] = Team::latest()->get();
        return view('frontend.pages.team', $data);
    }

    public function project()
    {
        $data = $this->seo('Project');

        $data['projects'] = Project::with('category')->where('status', 1)->latest()->paginate(6);

        $data['categories'] = Category::where('status', 1)->orderBy('order_number', 'ASC')->get();

        return view('frontend.pages.project', $data);
    }

    public function projectDetails($slug)
    {
        $data = $this->seo('Project Details');

        $data['project'] = Project::with([
                'category',
                'galleries',
                'dashboardImages'
            ])
            ->where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        return view('frontend.pages.project_details', $data);
    }

    public function contact()
    {
        $data = $this->seo('Contact Us');

        $data['settings'] = getSetting();

        return view('frontend.pages.contact', $data);
    }


    public function contactSub(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100|string',
            'company'  => 'nullable|max:100|string',
            'email'      => 'required|max:80|string',
            'message'    => 'required|max:512|string'
        ]);

        DB::beginTransaction();
        try {
            $contact = new Contact();
            $contact->name      = $request->first_name . ' ' . $request->last_name;
            $contact->email     = $request->email;
            $contact->reason    = $request->reason;
            $contact->phone     = $request->phone;
            $contact->message   = $request->message;
            $contact->save();

            // Send Contact Mail
            $data = [
                'greeting'    => 'Hello, Admin,',
                'body'        => 'An user send a contact message to your system. Please review and respond to the users query as soon as possible.',
                'name'        => 'User name- ' . $request->first_name . ' ' . $request->last_name,
                'email'       => 'User email- ' . $request->email,
                'link'        => route('admin.contact.index'),
                'msg'         => 'Click here to navigate to the query',
                'thanks'      => 'Thank you and stay with ' . ' ' . config('app.name'),
                'site_url'    => route('home'),
                'footer'      => '0',
                'site_name'   => config('app.name'),
                'copyright'   => ' © ' . ' ' . Carbon::now()->format('Y') . ' ' . config('app.name') . ' ' . 'All rights reserved.',
            ];

            $setting = Setting::first();
            $support_email = $setting->email ?? $setting->support_email;
            if ($support_email) {
                Mail::to($support_email)->send(new SendContact($data));
            }
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            $notify[] = ['error', 'An unexpected error occurred while submitting your query'];
            return redirect()->back()->withNotify($notify);
        }

        DB::commit();
        $notify[] = ['success', 'Message sent successfully. Our team will get back to you soon.'];
        return redirect()->back()->withNotify($notify);
    }


    public function privacy()
    {
        $data = CustomPage::where('url_slug', 'privacy-policy')->first();
        return view('frontend.pages.custom_page', compact('data'));
    }

    public function terms()
    {
         $data = CustomPage::where('url_slug', 'terms-and-conditions')->first();
        return view('frontend.pages.custom_page',compact('data'));
    }

    public function allVideos(){ 
        return view('frontend.all_videos');
    }

    public function reflectionDetials(){ 
        return view('frontend.reflection_detials');
    }

    public function shareReflection(){
        return view('frontend.share_reflection');
    }

    
}
