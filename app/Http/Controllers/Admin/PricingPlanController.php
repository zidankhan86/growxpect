<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingPlanController extends Controller
{
    public function index()
    {
        $plans = PricingPlan::orderBy('sort_order', 'asc')->get();
        return response()->json([
            'success' => true,
            'pricing_plans' => $plans
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required|string|max:255',
            'price'          => 'required|string|max:100',
            'description'    => 'required|string',
            'badge'          => 'nullable|string|max:255',
            'tier_type'      => 'nullable|string|max:100',
            'price_period'   => 'nullable|string|max:100',
            'sub_price_note' => 'nullable|string|max:255',
            'features'       => 'nullable|string', // newline separated string converted to array
            'cta_text'       => 'nullable|string|max:255',
            'cta_link'       => 'nullable|string|max:512',
            'is_popular'     => 'nullable|boolean',
            'sort_order'     => 'nullable|integer',
        ]);

        $featuresArray = [];
        if ($request->filled('features')) {
            $featuresArray = array_values(array_filter(array_map('trim', explode("\n", $request->features))));
        }

        $plan = PricingPlan::create([
            'name'           => $request->name,
            'badge'          => $request->badge,
            'tier_type'      => $request->tier_type ?? 'home',
            'price'          => $request->price,
            'price_period'   => $request->price_period ?? '/ month',
            'sub_price_note' => $request->sub_price_note,
            'description'    => $request->description,
            'features'       => $featuresArray,
            'cta_text'       => $request->cta_text ?? 'Book Strategy Call',
            'cta_link'       => $request->cta_link ?? '#booking',
            'is_popular'     => $request->has('is_popular') ? (bool)$request->is_popular : false,
            'sort_order'     => $request->sort_order ?? 0,
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Pricing plan created successfully.',
                'pricing_plan' => $plan
            ]);
        }

        return redirect()->back()->with('success', 'Pricing plan created successfully.');
    }

    public function update(Request $request, $id)
    {
        $plan = PricingPlan::findOrFail($id);

        $request->validate([
            'name'           => 'required|string|max:255',
            'price'          => 'required|string|max:100',
            'description'    => 'required|string',
            'badge'          => 'nullable|string|max:255',
            'tier_type'      => 'nullable|string|max:100',
            'price_period'   => 'nullable|string|max:100',
            'sub_price_note' => 'nullable|string|max:255',
            'features'       => 'nullable|string',
            'cta_text'       => 'nullable|string|max:255',
            'cta_link'       => 'nullable|string|max:512',
            'is_popular'     => 'nullable|boolean',
            'sort_order'     => 'nullable|integer',
        ]);

        $featuresArray = [];
        if ($request->filled('features')) {
            $featuresArray = array_values(array_filter(array_map('trim', explode("\n", $request->features))));
        }

        $plan->update([
            'name'           => $request->name,
            'badge'          => $request->badge,
            'tier_type'      => $request->tier_type ?? 'home',
            'price'          => $request->price,
            'price_period'   => $request->price_period ?? '/ month',
            'sub_price_note' => $request->sub_price_note,
            'description'    => $request->description,
            'features'       => $featuresArray,
            'cta_text'       => $request->cta_text ?? 'Book Strategy Call',
            'cta_link'       => $request->cta_link ?? '#booking',
            'is_popular'     => $request->has('is_popular') ? (bool)$request->is_popular : false,
            'sort_order'     => $request->sort_order ?? 0,
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Pricing plan updated successfully.',
                'pricing_plan' => $plan
            ]);
        }

        return redirect()->back()->with('success', 'Pricing plan updated successfully.');
    }

    public function destroy($id)
    {
        $plan = PricingPlan::findOrFail($id);
        $plan->delete();

        if (request()->ajax() || request()->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Pricing plan deleted successfully.'
            ]);
        }

        return redirect()->back()->with('success', 'Pricing plan deleted successfully.');
    }
}
