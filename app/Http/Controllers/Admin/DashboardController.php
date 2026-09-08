<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
use App\Models\CourseClass;
use App\Models\Enrollment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;

class DashboardController extends Controller
{

    public function dashboard(Request $request)
    {
        $totalUsers    = User::count();

        // New user registrations per day (last 7)
        $newUsersData = collect(range(6, 0))->map(
            fn($d) => User::whereDate('created_at', now()->subDays($d)->toDateString())->count()
        )->values();

        return view('admin.dashboard', compact(
            'totalUsers','newUsersData'
        ));
    }


    public function cacheClear()
    {
        $notify[] = ['success', 'Cache Cleared'];
        Artisan::call('route:clear');
        Artisan::call('optimize:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('clear-compiled');
        Artisan::call('cache:forget spatie.permission.cache');
        app(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        Artisan::call('config:cache');

        return back()->withNotify($notify);
    }

    public function adminProfile()
    {
        $roles = Role::latest()->get();
        return view('admin.profile.index', compact('roles'));
    }

    public function profileEdit()
    {
        return view('admin.profile.edit');
    }

    public function profileUpdate(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = Admin::where('id', $user_id)->first();
        $this->validate($request, [
            'name'  => 'required',
            'email'   => 'required|unique:admins,email,' . $user->id . ',id',
        ]);

        try {

            $user->name = $request->name;
            $user->email = $request->email;

            if ($request->hasFile('image')) {

                if (File::exists(public_path($user->image))) {
                    File::delete(public_path($user->image));
                }

                $image = $request->file('image');
                $base_name  = preg_replace('/\..+$/', '', $image->getClientOriginalName());
                $base_name  = explode(' ', $base_name);
                $base_name  = implode('-', $base_name);
                $base_name  = Str::lower($base_name);
                $image_name = $base_name . "-" . uniqid() . "." . $image->getClientOriginalExtension();
                $file_path  = 'uploads/admin';
                $image->move(public_path($file_path), $image_name);
                $user->image  = $file_path . '/' . $image_name;
            }

            $user->save();
        } catch (\Exception $e) {
            $notify[] = ['error', 'An unexpected error occured while updating profile information'];
            return redirect()->back()->withNotify($notify);
        }

        $notify[] = ['success', 'Profile information updated successfully'];
        return redirect()->route('admin.profile')->withNotify($notify);
    }

    public function passwordUpdate(Request $request)
    {
        $this->validate($request, [
            'password'          => 'required|min:6',
            'confirm_password'  => 'required|same:password',
        ]);

        try {
            $user  = Admin::find(Auth::user()->id);
            $user->password = Hash::make($request->input('password'));
            $user->update();
        } catch (\Exception $e) {
            $notify[] = ['error', 'An unexpected error occured while updating password'];
            return redirect()->back()->withNotify($notify);
        }

        $notify[] = ['success', 'Password updated successfully'];
        return redirect()->back()->withNotify($notify);
    }
}



