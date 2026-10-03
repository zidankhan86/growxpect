<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CaseStudyController extends Controller
{
    public function index()
    {
        $caseStudies = CaseStudy::orderBy('sort_order', 'asc')->get();
        return view('admin.case_studies.index', compact('caseStudies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'headline' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'category_label' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        $data = $request->except(['_token', 'image']);

        if (!$request->filled('slug')) {
            $data['slug'] = Str::slug($request->title) . '-' . time();
        } else {
            $data['slug'] = Str::slug($request->slug);
        }

        $data['is_featured'] = $request->has('is_featured') ? 1 : 0;
        $data['sort_order'] = $request->sort_order ?? 0;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . Str::slug($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/case_studies'), $filename);
            $data['image'] = 'uploads/case_studies/' . $filename;
        }

        if ($request->hasFile('gallery_images')) {
            $galleryPaths = [];
            foreach ($request->file('gallery_images') as $file) {
                $filename = time() . '_' . Str::random(5) . '_' . Str::slug($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/case_studies'), $filename);
                $galleryPaths[] = 'uploads/case_studies/' . $filename;
            }
            $data['images'] = $galleryPaths;
        }

        CaseStudy::create($data);

        return redirect()->back()->with('success', 'Case study added successfully!');
    }

    public function update(Request $request, $id)
    {
        $caseStudy = CaseStudy::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'headline' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'category_label' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        $data = $request->except(['_token', 'image', 'gallery_images']);

        if ($request->filled('slug')) {
            $data['slug'] = Str::slug($request->slug);
        }

        $data['is_featured'] = $request->has('is_featured') ? 1 : 0;
        $data['sort_order'] = $request->sort_order ?? 0;

        if ($request->hasFile('image')) {
            if ($caseStudy->image && file_exists(public_path($caseStudy->image))) {
                @unlink(public_path($caseStudy->image));
            }
            $file = $request->file('image');
            $filename = time() . '_' . Str::slug($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/case_studies'), $filename);
            $data['image'] = 'uploads/case_studies/' . $filename;
        }

        if ($request->hasFile('gallery_images')) {
            $galleryPaths = [];
            foreach ($request->file('gallery_images') as $file) {
                $filename = time() . '_' . Str::random(5) . '_' . Str::slug($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/case_studies'), $filename);
                $galleryPaths[] = 'uploads/case_studies/' . $filename;
            }
            $data['images'] = $galleryPaths;
        }

        $caseStudy->update($data);

        return redirect()->back()->with('success', 'Case study updated successfully!');
    }

    public function destroy($id)
    {
        $caseStudy = CaseStudy::findOrFail($id);

        if ($caseStudy->image && file_exists(public_path($caseStudy->image))) {
            @unlink(public_path($caseStudy->image));
        }

        $caseStudy->delete();

        return redirect()->back()->with('success', 'Case study deleted successfully!');
    }
}
