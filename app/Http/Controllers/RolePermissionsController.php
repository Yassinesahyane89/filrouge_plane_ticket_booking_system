<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionsController extends Controller
{
  public function index()
  {
    $roles = Role::with('users')->get();

    return view('content.role.index', [
      'roles' => $roles
    ]);
  }

  public function save(Request $request)
  {
    $request->validate([
      'newRoleName' => 'required|unique:roles,name|min:3|max:255|regex:/^[a-zA-Z0-9]+$/',
    ]);

    $role = Role::create(['name' => $request->newRoleName]);

    return redirect()->route('role.index')->with('success', 'Role created successfully!');
  }
}
