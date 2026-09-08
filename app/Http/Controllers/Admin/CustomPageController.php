<?php

namespace App\Http\Controllers\Admin;

use App\Models\CustomPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomPageController extends Controller
{
    public $user;
    protected $page;

    public function __construct(CustomPage $page)
    {
        $this->page = $page;

        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }

    public function index(Request $request)
    {
        if (is_null($this->user) || !$this->user->can('admin.cpage.index')) {
            abort(403, 'Sorry !! You are Unauthorized.');
        }

        $data['title'] = 'Custom Page List';
        $data['rows'] = CustomPage::get();
        return view('admin.custom-page.index', compact('data'));
    }

    public function create()
    {
        if (is_null($this->user) || !$this->user->can('admin.cpage.create')) {
            abort(403, 'Sorry !! You are Unauthorized.');
        }

        $data['title'] = __('messages.common.custom_page_create');
        return view('admin.custom-page.create', compact('data'));
    }

    public function store(Request $request)
    {
        if (is_null($this->user) || !$this->user->can('admin.cpage.store')) {
            abort(403, 'Sorry !! You are Unauthorized.');
        }

        $this->resp = $this->page->postStore($request);
        $notify = [];

        if (!$this->resp->status) {
            $notify[] = ['error', trans($this->resp->msg)];
            return redirect()->back()->with($this->resp->redirect_class, $this->resp->msg)->withNotify($notify);
        }

        $notify[] = ['success', trans($this->resp->msg)];
        return redirect()->route($this->resp->redirect_to)->with($this->resp->redirect_class, $this->resp->msg)->withNotify($notify);
    }

    public function edit($id)
    {
        if (is_null($this->user) || !$this->user->can('admin.cpage.edit')) {
            abort(403, 'Sorry !! You are Unauthorized.');
        }

        $data['title'] = __('Custom Page Edit');
        $data['row'] = CustomPage::find($id);
        return view('admin.custom-page.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:60',
            'meta_title' => 'required|max:60',
            'meta_keywords' => 'required',
            'meta_description' => 'required|max:160',
        ]);

        $this->resp = $this->page->putUpdate($request, $id);
        $notify = [];

        if (!$this->resp->status) {
            $notify[] = ['error', trans($this->resp->msg)];
            return redirect()->back()->with($this->resp->redirect_class, $this->resp->msg)->withNotify($notify);
        }

        $notify[] = ['success', trans($this->resp->msg)];
        return redirect()->route($this->resp->redirect_to)->with($this->resp->redirect_class, $this->resp->msg)->withNotify($notify);
    }

    public function view($id)
    {
        if (is_null($this->user) || !$this->user->can('admin.cpage.view')) {
            abort(403, 'Sorry !! You are Unauthorized.');
        }

        $data['title'] = __('Details');
        $data['row'] = CustomPage::find($id);

        return view('admin.custom-page.view', compact('data'));
    }

    public function postEditorImageUpload(Request $request)
    {
        if (!is_null($request->file('image'))) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_path = 'assets/uploads/page';
            $base_name = preg_replace('/\..+$/', '', $image->getClientOriginalName());
            $base_name = explode(' ', $base_name);
            $base_name = implode('-', $base_name);
            $img = Image::make($image->getRealPath());
            $feature_image = $base_name . "-" . uniqid() . '.webp';
            Image::make($img)->save($file_path . '/' . $feature_image);
            $image_name = $file_path . '/' . $feature_image;
            return url('/') . '/' . $image_name;
        }
    }

    public function getDelete($id)
    {
        $this->resp = $this->page->getDelete($id);
        $notify = [];
        $notify[] = ['success', trans($this->resp->msg)];
        return redirect()->route($this->resp->redirect_to)->with($this->resp->redirect_class, $this->resp->msg)->withNotify($notify);
    }

    public function changeActiveStatus(Request $request)
    {
        $id = $request->id;
        $article = Page::findOrFail($id);
        $page->is_active = !$page->is_active;
        $page->updated_by = Auth::user()->PK_NO;
        $page->update();
        return response()->json($article);
    }
}
