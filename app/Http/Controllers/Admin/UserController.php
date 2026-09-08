<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Admin;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Actions\User\UpdateUser;
use App\Actions\User\CreateUser;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $title = 'Admin';
        $users = Admin::latest()->get();
        $roles = Role::latest()->get();
        return view('admin.users.index', compact('users', 'roles', 'title'));
    }

    public function create(Request $request)
    {
        $title = 'Admin';
        $settings = Setting::where('status', 1)->first();
        $config = DB::table('config')->get();
        $roles = Role::latest()->get();
        return view('admin.users.create', compact('settings', 'config', 'roles', 'title'));
    }

    public function store(Admin $user, StoreUserRequest $request)
    {
        DB::beginTransaction();
        try {
            CreateUser::create($request);
            $notify[] = ['success', trans('Admin created Successfully!')];
        } catch (\Throwable $th) {
            // dd($th);
            DB::rollBack();
            $notify[] = ['error', trans('An unexpected error occured while creating an Admin')];
            return back()->withNotify($notify);
        }
        DB::commit();
        return redirect()->route('admin.user.index')->withNotify($notify);
    }

    public function edit($id)
    {
        $title = 'Admin';
        $user = Admin::find($id);
        return view('admin.users.edit', [
            'user' => $user,
            'roles' => Role::latest()->get(),
            'title' => $title
        ]);
    }

    public function passwordEdit($id)
    {
        $title = 'Admin';
        $user = Admin::find($id);
        return view('admin.users.password', ['user' => $user, 'title' => $title]);
    }

    public function passwordUpdate($id, Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        DB::beginTransaction();
        try {
            $user = Admin::find($id);
            if ($request->password) {
                $user->password = bcrypt($request->password);
            }
            $user->save();
            $notify[] = ['success', __('messages.toastr.admin_password_success')];
        } catch (\Throwable $th) {
            DB::rollBack();
            $notify[] = ['error', __('messages.toastr.password_change_error')];
            return back()->withNotify($notify);
        }
        DB::commit();
        return redirect()->route('admin.user.index')->withNotify($notify);
    }

    public function update($id, UpdateUserRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = Admin::find($id);
            UpdateUser::update($request, $user);
            $notify[] = ['success', __('messages.toastr.admin_update_success')];
        } catch (\Throwable $th) {
            // dd($th);
            DB::rollBack();
            $notify[] = ['error', __('messages.toastr.admin_update_error')];
            return back()->withNotify($notify);
        }
        DB::commit();
        return redirect()->route('admin.user.index')->withNotify($notify);
    }

    // public function authAs(Request $request, $id)
    // {
    //     $user_details = Admin::where('id', $id)->where('status', 1)->first();
    //     if ($user_details) {
    //         Auth::loginUsingId($user_details->id);
    //         return redirect()->route('dashboard');
    //     } else {
    //         $notify[] = ['info', 'User account was not found!'];
    //         return redirect()->route('admin.users')->withNotify($notify);
    //     }
    // }
}
