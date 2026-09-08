<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class HomepageCmsController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }

    public function manage()
    {
        $data['title'] = __('Homepage CMS');
        $data['cms'] = HomepageContent::query()
            ->get(['section', 'field_key', 'field_value'])
            ->flatMap(function ($item) {
                return [
                    $item->field_key => $item->field_value,
                    $item->section . '_' . $item->field_key => $item->field_value,
                ];
            })
            ->toArray();

        return view('admin.cms.manage', $data);
    }

    public function updateHero(Request $request)
    {
        $request->validate([
            'heading'      => 'nullable|string|max:1000',
            'description'  => 'nullable|string|max:2000',
            'btn_text'     => 'nullable|string|max:100',
            'btn_link'     => 'nullable|string|max:512',
            'trust_1'      => 'nullable|string|max:255',
            'trust_2'      => 'nullable|string|max:255',
            'trust_3'      => 'nullable|string|max:255',
        ]);

        try {
            foreach (['heading', 'description', 'btn_text', 'btn_link', 'trust_1', 'trust_2', 'trust_3'] as $field) {
                HomepageContent::set('hero', $field, $request->input($field));
            }

            if ($request->hasFile('banner_image')) {
                $this->replaceImage($request->file('banner_image'), 'hero', 'banner_image', 'uploads/cms/hero');
            }
            if ($request->hasFile('person_image')) {
                $this->replaceImage($request->file('person_image'), 'hero', 'person_image', 'uploads/cms/hero');
            }

            return $this->jsonSuccess(__('Hero section updated successfully.'));
        } catch (\Exception $e) {
            Log::error('CMS Hero update: ' . $e->getMessage());
            return $this->jsonError(__('Failed to update hero section.'));
        }
    }

    public function updateSocialProof(Request $request)
    {
        $request->validate([
            'heading'        => 'nullable|string|max:500',
            'highlight_text' => 'nullable|string|max:500',
            'note'           => 'nullable|string|max:500',
        ]);

        try {
            foreach (['heading', 'highlight_text', 'note'] as $field) {
                HomepageContent::set('social_proof', $field, $request->input($field));
            }
            return $this->jsonSuccess(__('Social proof section updated successfully.'));
        } catch (\Exception $e) {
            Log::error('CMS SocialProof update: ' . $e->getMessage());
            return $this->jsonError(__('Failed to update social proof section.'));
        }
    }

    public function updateProofGallery(Request $request)
    {
        $request->validate([
            'image_1'  => 'nullable|image|mimes:jpeg,jpg,png,webp,gif|max:5120',
            'image_2'  => 'nullable|image|mimes:jpeg,jpg,png,webp,gif|max:5120',
            'btn_text' => 'nullable|string|max:100',
            'btn_link' => 'nullable|string|max:512',
        ]);

        try {
            foreach (['image_1', 'image_2'] as $key) {
                if ($request->hasFile($key)) {
                    $this->replaceImage($request->file($key), 'proof_gallery', $key, 'uploads/cms/proof-gallery');
                }
            }
            foreach (['btn_text', 'btn_link'] as $field) {
                HomepageContent::set('proof_gallery', $field, $request->input($field));
            }
            return $this->jsonSuccess(__('Proof gallery updated successfully.'));
        } catch (\Exception $e) {
            Log::error('CMS ProofGallery update: ' . $e->getMessage());
            return $this->jsonError(__('Failed to update proof gallery.'));
        }
    }

    public function updateChallengeDetails(Request $request)
    {
        $request->validate([
            'section_title' => 'nullable|string|max:255',
            'item_1_title'  => 'nullable|string|max:255',
            'item_1_desc'   => 'nullable|string|max:2000',
            'item_2_title'  => 'nullable|string|max:255',
            'item_2_desc'   => 'nullable|string|max:2000',
            'item_3_title'  => 'nullable|string|max:255',
            'item_3_desc'   => 'nullable|string|max:2000',
            'btn_text'      => 'nullable|string|max:100',
            'btn_link'      => 'nullable|string|max:512',
        ]);

        try {
            $fields = ['section_title', 'item_1_title', 'item_1_desc', 'item_2_title', 'item_2_desc', 'item_3_title', 'item_3_desc', 'btn_text', 'btn_link'];
            foreach ($fields as $field) {
                HomepageContent::set('challenge_details', $field, $request->input($field));
            }
            return $this->jsonSuccess(__('Challenge details updated successfully.'));
        } catch (\Exception $e) {
            Log::error('CMS ChallengeDetails update: ' . $e->getMessage());
            return $this->jsonError(__('Failed to update challenge details.'));
        }
    }

    public function updateCourseModule(Request $request)
    {
        $request->validate([
            'section_title'      => 'nullable|string|max:500',
            'learn_heading'      => 'nullable|string|max:500',
            'learn_description'  => 'nullable|string|max:2000',
            'learn_btn_text'     => 'nullable|string|max:100',
            'learn_btn_link'     => 'nullable|string|max:512',
            'class_1_label'      => 'nullable|string|max:100',
            'class_1_subtitle'   => 'nullable|string|max:255',
            'class_1_learn_text' => 'nullable|string|max:255',
            'class_1_items'      => 'nullable|string|max:2000',
            'class_2_label'      => 'nullable|string|max:100',
            'class_2_items'      => 'nullable|string|max:2000',
            'class_3_label'      => 'nullable|string|max:100',
            'class_3_items'      => 'nullable|string|max:2000',
            'class_4_label'      => 'nullable|string|max:100',
            'class_4_items'      => 'nullable|string|max:2000',
        ]);

        try {
            $fields = [
                'section_title', 'learn_heading', 'learn_description', 'learn_btn_text', 'learn_btn_link',
                'class_1_label', 'class_1_subtitle', 'class_1_learn_text', 'class_1_items',
                'class_2_label', 'class_2_items',
                'class_3_label', 'class_3_items',
                'class_4_label', 'class_4_items',
            ];
            foreach ($fields as $field) {
                HomepageContent::set('course_module', $field, $request->input($field));
            }
            return $this->jsonSuccess(__('Course module updated successfully.'));
        } catch (\Exception $e) {
            Log::error('CMS CourseModule update: ' . $e->getMessage());
            return $this->jsonError(__('Failed to update course module.'));
        }
    }

    public function updateWhyListen(Request $request)
    {
        $imageRule = 'nullable|image|mimes:jpeg,jpg,png,webp,gif|max:5120';

        $rules = ['section_title' => 'nullable|string|max:255'];
        for ($i = 1; $i <= 5; $i++) {
            $rules["item_{$i}_image"]       = $imageRule;
            $rules["item_{$i}_image_url"]   = 'nullable|string|max:512';
            $rules["item_{$i}_title"]       = 'nullable|string|max:500';
            $rules["item_{$i}_description"] = 'nullable|string|max:2000';
            if ($i <= 3) {
                $rules["item_{$i}_overlay"] = 'nullable|string|max:100';
            }
        }
        $request->validate($rules);

        try {
            HomepageContent::set('why_listen', 'section_title', $request->input('section_title'));

            for ($i = 1; $i <= 5; $i++) {
                HomepageContent::set('why_listen', "item_{$i}_title", $request->input("item_{$i}_title"));
                HomepageContent::set('why_listen', "item_{$i}_description", $request->input("item_{$i}_description"));

                if ($i <= 3) {
                    HomepageContent::set('why_listen', "item_{$i}_overlay", $request->input("item_{$i}_overlay"));
                }

                // Image: uploaded file takes precedence, then URL, then keep existing
                if ($request->hasFile("item_{$i}_image")) {
                    $this->replaceImage($request->file("item_{$i}_image"), 'why_listen', "item_{$i}_image", 'uploads/cms/why-listen');
                } elseif ($request->filled("item_{$i}_image_url")) {
                    HomepageContent::set('why_listen', "item_{$i}_image", $request->input("item_{$i}_image_url"), 'image');
                }
            }

            return $this->jsonSuccess(__('Why Listen section updated successfully.'));
        } catch (\Exception $e) {
            Log::error('CMS WhyListen update: ' . $e->getMessage());
            return $this->jsonError(__('Failed to update Why Listen section.'));
        }
    }

    public function updateFooter(Request $request)
    {
        $request->validate([
            'privacy_text'   => 'nullable|string|max:255',
            'privacy_url'    => 'nullable|string|max:512',
            'terms_text'     => 'nullable|string|max:255',
            'terms_url'      => 'nullable|string|max:512',
            'copyright_text' => 'nullable|string|max:500',
        ]);

        try {
            foreach (['privacy_text', 'privacy_url', 'terms_text', 'terms_url', 'copyright_text'] as $field) {
                HomepageContent::set('footer', $field, $request->input($field));
            }
            return $this->jsonSuccess(__('Footer updated successfully.'));
        } catch (\Exception $e) {
            Log::error('CMS Footer update: ' . $e->getMessage());
            return $this->jsonError(__('Failed to update footer.'));
        }
    }

    // ── Helpers ────────────────────────────────────────────────────────────

    private function jsonSuccess(string $message)
    {
        return response()->json(['success' => true, 'message' => $message]);
    }

    private function jsonError(string $message)
    {
        return response()->json(['success' => false, 'message' => $message]);
    }

    private function deleteStoredImage(string $section, string $key): void
    {
        $oldPath = HomepageContent::get($section, $key);
        if ($oldPath && !Str::startsWith($oldPath, ['http://', 'https://']) && File::exists(public_path($oldPath))) {
            File::delete(public_path($oldPath));
        }
    }

    private function replaceImage($file, string $section, string $key, string $folder): void
    {
        $this->deleteStoredImage($section, $key);

        if (!File::isDirectory(public_path($folder))) {
            File::makeDirectory(public_path($folder), 0755, true);
        }

        $imageName = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))
                     . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($folder), $imageName);

        HomepageContent::set($section, $key, $folder . '/' . $imageName, 'image');
    }

    private function detectFieldType(string $key): string
    {
        if (str_contains($key, 'url')) {
            return 'url';
        }

        if (str_contains($key, 'image')) {
            return 'image';
        }

        if (
            str_contains($key, 'text') ||
            str_contains($key, 'title') ||
            str_contains($key, 'subtitle') ||
            str_contains($key, 'line') ||
            $key === 'quote'
        ) {
            return 'textarea';
        }

        return 'text';
    }

    public function updateCms(Request $request)
    {
        $request->validate([
            'section' => 'required|string',
        ]);

        try {
            $section = $request->input('section');
            $data = $request->except(['_token', 'section']);

            foreach ($data as $key => $value) {
                if ($request->hasFile($key)) {
                    $this->replaceImage($request->file($key), $section, $key, 'uploads/cms/' . $section);
                } else {
                    HomepageContent::set(
                        $section,
                        $key,
                        $value,
                        $this->detectFieldType($key)
                    );
                }
            }

            return $this->jsonSuccess(ucwords(str_replace('_', ' ', $section)) . ' updated successfully.');
        } catch (\Exception $e) {
            Log::error('CMS Update Error: ' . $e->getMessage());
            return $this->jsonError('Failed to update CMS.');
        }
    }



}
