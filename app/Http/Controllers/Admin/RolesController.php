<?php

namespace App\Http\Controllers\Admin;


use App\Models\Admin;
use Illuminate\Http\Request;
use App\Actions\Role\CreateRole;
use App\Actions\Role\UpdateRole;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    use ValidatesRequests;
    public $user;

    function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }

    public function index(Request $request)
    {
        $data['title']  = 'Admin Roles';
        $roles = Role::orderBy('id', 'DESC')->paginate(5);
        return view('admin.roles.index', compact('roles', 'data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $data['title']  = 'Admin Role Create';
        $permissions = Permission::all();
        $permission_groups = Admin::getPermissionGroup();

        return view('admin.roles.create', compact('permissions', 'permission_groups', 'data'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            CreateRole::create($request);
            $notify[] = ['success', trans('Role created successfully')];
        } catch (\Throwable $th) {
            DB::rollback();
            $notify[] = ['error', $th->getMessage()];
            return back()->withNotify($notify);
        }

        DB::commit();
        return redirect()->route('admin.roles.index')->withNotify($notify);
    }

    public function edit($id)
    {
        $data['title']  = 'Admin Role Edit';
        $role = Role::find($id);
        $permissions = Permission::all();
        $permission_groups = Admin::getPermissionGroup();
        return view('admin.roles.edit', compact('role', 'permission_groups', 'permissions', 'data'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $role = Role::find($id);
            UpdateRole::update($request, $role);
            $notify[] = ['success', trans('Role updated successfully')];
        } catch (\Throwable $th) {
            DB::rollback();
            $notify[] = ['error', $th->getMessage()];
            return back()->withNotify($notify);
        }
        DB::commit();
        return redirect()->route('admin.roles.index')->withNotify($notify);
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        $notify[] = ['success', trans('Role deleted successfully')];
        return redirect()->route('admin.roles.index')->withNotify($notify);
    }
}
