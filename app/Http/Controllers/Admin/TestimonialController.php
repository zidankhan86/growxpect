<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('sort_order', 'asc')->get();
        return response()->json([
            'success' => true,
            'testimonials' => $testimonials
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'             => 'required|string|max:255',
            'role_company'     => 'required|string|max:255',
            'rating'           => 'required|integer|min:1|max:5',
            'content'          => 'required|string',
            'highlight_metric' => 'nullable|string|max:255',
            'video_url'        => 'nullable|string|max:512',
            'avatar'           => 'nullable|image|mimes:jpeg,jpg,png,webp,gif|max:5120',
            'sort_order'       => 'nullable|integer',
        ]);

        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $folder = 'uploads/testimonials';
            if (!File::isDirectory(public_path($folder))) {
                File::makeDirectory(public_path($folder), 0755, true);
            }
            $file = $request->file('avatar');
            $imageName = Str::slug($request->name) . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($folder), $imageName);
            $avatarPath = $folder . '/' . $imageName;
        }

        $testimonial = Testimonial::create([
            'name'             => $request->name,
            'role_company'     => $request->role_company,
            'avatar'           => $avatarPath,
            'rating'           => $request->rating ?? 5,
            'content'          => $request->content,
            'highlight_metric' => $request->highlight_metric,
            'video_url'        => $request->video_url,
            'is_active'        => $request->has('is_active') ? (bool)$request->is_active : true,
            'sort_order'       => $request->sort_order ?? 0,
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Testimonial created successfully.',
                'testimonial' => $testimonial
            ]);
        }

        return redirect()->back()->with('success', 'Testimonial created successfully.');
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $request->validate([
            'name'             => 'required|string|max:255',
            'role_company'     => 'required|string|max:255',
            'rating'           => 'required|integer|min:1|max:5',
            'content'          => 'required|string',
            'highlight_metric' => 'nullable|string|max:255',
            'video_url'        => 'nullable|string|max:512',
            'avatar'           => 'nullable|image|mimes:jpeg,jpg,png,webp,gif|max:5120',
            'sort_order'       => 'nullable|integer',
        ]);

        if ($request->hasFile('avatar')) {
            if ($testimonial->avatar && File::exists(public_path($testimonial->avatar))) {
                File::delete(public_path($testimonial->avatar));
            }

            $folder = 'uploads/testimonials';
            if (!File::isDirectory(public_path($folder))) {
                File::makeDirectory(public_path($folder), 0755, true);
            }
            $file = $request->file('avatar');
            $imageName = Str::slug($request->name) . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($folder), $imageName);
            $testimonial->avatar = $folder . '/' . $imageName;
        }

        $testimonial->update([
            'name'             => $request->name,
            'role_company'     => $request->role_company,
            'rating'           => $request->rating ?? 5,
            'content'          => $request->content,
            'highlight_metric' => $request->highlight_metric,
            'video_url'        => $request->video_url,
            'is_active'        => $request->has('is_active') ? (bool)$request->is_active : true,
            'sort_order'       => $request->sort_order ?? 0,
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Testimonial updated successfully.',
                'testimonial' => $testimonial
            ]);
        }

        return redirect()->back()->with('success', 'Testimonial updated successfully.');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        if ($testimonial->avatar && File::exists(public_path($testimonial->avatar))) {
            File::delete(public_path($testimonial->avatar));
        }
        $testimonial->delete();

        if (request()->ajax() || request()->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Testimonial deleted successfully.'
            ]);
        }

        return redirect()->back()->with('success', 'Testimonial deleted successfully.');
    }
}
