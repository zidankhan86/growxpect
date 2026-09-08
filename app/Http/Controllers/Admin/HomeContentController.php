<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    public function index()
    {
        $data['title'] =  __('messages.common.home_page_content');
        $home = HomeContent::first();
        return view('admin.home_content.index', compact('data', 'home'));
    }


}
