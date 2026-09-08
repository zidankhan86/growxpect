<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();

        return view('admin.permissions.index', [
            'permissions' => $permissions
        ]);
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users,name',
            'group_name' => 'required'
        ]);

        try {
            Permission::create($request->only('name','group_name'));
            $notify[] = ['success', trans('Permission created successfully.')];
        } catch (\Exception $e) { 
            $notify[] = ['error', trans($e->getMessage())];
        }
       
        return redirect()->route('admin.permissions.index')->withNotify($notify);
    }

    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('admin.permissions.edit', [
            'permission' => $permission
        ]);
    }

    public function update(Request $request, $id)
    {
        $permission = Permission::find($id);
        $request->validate([
            'name' => 'required|unique:permissions,name,'.$permission->id,
            'group_name' => 'required'
        ]);

        $permission->update($request->only('name','group_name'));
        $notify[] = ['success', trans('Permission updated successfully.')];

        return redirect()->route('admin.permissions.index')->withNotify($notify);
    }

    public function destroy($id)
    {
        Permission::find($id)->delete();
        $notify[] = ['success', trans('Permission deleted successfully.')];

        return redirect()->route('admin.permissions.index')->withNotify($notify);
    }
}
