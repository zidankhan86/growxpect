<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\CustomPage;
use App\Models\PricingPlan;
use App\Models\Seo;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $seo = Seo::where('page_slug', 'home')->first();
        $testimonials = Testimonial::where('is_active', true)->orderBy('sort_order')->get();
        $pricingPlans = PricingPlan::where('tier_type', 'home')->orderBy('sort_order')->get();
        $featuredCaseStudies = CaseStudy::where('is_featured', true)->orderBy('sort_order')->take(2)->get();

        return view('pages.home', compact('seo', 'testimonials', 'pricingPlans', 'featuredCaseStudies'));
    }

    public function about()
    {
        $seo = Seo::where('page_slug', 'about')->first();
        return view('pages.about', compact('seo'));
    }

    public function caseStudies(Request $request)
    {
        $seo = Seo::where('page_slug', 'case_studies')->first();
        $category = $request->query('category');
        $query = CaseStudy::query();

        if ($category && in_array($category, ['healthcare', 'saas', 'realestate', 'ecommerce'])) {
            $query->where('category', $category);
        }

        $caseStudies = $query->orderBy('sort_order')->get();

        return view('pages.case-studies', compact('seo', 'caseStudies', 'category'));
    }

    public function services()
    {
        $seo = Seo::where('page_slug', 'services')->first();
        $pricingPlans = PricingPlan::orderBy('sort_order')->get()->groupBy('tier_type');
        return view('pages.services', compact('seo', 'pricingPlans'));
    }

    public function gohighlevel()
    {
        $seo = Seo::where('page_slug', 'gohighlevel')->first();
        return view('pages.gohighlevel', compact('seo'));
    }

    public function customPage($slug)
    {
        $page = CustomPage::where('slug', $slug)->firstOrFail();
        return view('pages.custom-page', compact('page'));
    }
}
