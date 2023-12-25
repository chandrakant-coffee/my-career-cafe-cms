<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;
use DB;
use App\Models\User;

class RolePermissionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Role = Role::paginate(10);
        $Permissions = Permission::with('roles')->get();
        return view('role-permission.index',compact('Role','Permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role-permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!isset($request->role)) {
            return redirect()->back()->with('error','Role not be null');
        }
        if (Role::where('name', $request->role)->exists()) {
            return redirect()->back()->with('error','Role already exits');
        }
        $role = Role::create(['name' => $request->role]);
        return redirect()->route('role-permission.index')->with('success','Role created successfully');


       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {   
        $Roles = Role::find($id);
        $rolePermission = $Roles->permissions;
        $PermissionArray[] = NULL;
        if ($rolePermission->first()!=NULL) {
            $PermissionArray = $rolePermission->pluck('id')->toArray();
        }
        $AllPermission = Permission::whereNotNull('controller')->select('controller')
        ->selectRaw("CONCAT('[', GROUP_CONCAT(CASE WHEN permissions.controller IS NOT NULL THEN JSON_OBJECT('id',permissions.id,'name',permissions.name) END), ']') AS permission")
        ->groupBy('permissions.controller')
        ->get();
        return view('role-permission.edit',compact('AllPermission','Roles','PermissionArray',));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->RoleName;
        if ($role->save()) {
            $ReqPermission = $request->permission;
            if (!isset($ReqPermission)) {
                $ReqPermission[] = NULL;
            }
            $permissions = Permission::whereIn('id', $ReqPermission)->get();
            $role->syncPermissions($permissions);
            return redirect()->route('role-permission.index')->with('success','Record has been updated');
        } else {
            return redirect()->route('role-permission.create')->with('error','Something went wrong');
        }
       
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->syncPermissions([]);
        $role->delete();
        return redirect()->back()->with('success', 'Role and its permissions deleted successfully.');
    }
}
