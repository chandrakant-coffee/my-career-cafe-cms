<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;
class PermissionListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Permission::orderBy('controller','desc')->paginate(10);
        return view('permission-listing.index',compact('data'))->with('i', (request()->input('page', 1) - 1) * 10);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $RoleList = Role::all();
        return view('permission-listing.create',compact('RoleList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            if (isset($request->resource)&&$request->resource=='on') {
                $resource = [
                    $request->permission_name.'.index', $request->permission_name.'.create', 
                    $request->permission_name.'.store', $request->permission_name.'.edit',
                    $request->permission_name.'.update',$request->permission_name.'.destroy',
                    $request->permission_name.'.show'
                ];
                foreach ($resource as $key => $value) {
                    $Res_permission = new Permission();
                    $Res_permission->name = $value;
                    $Res_permission->controller = $request->controller_name;
                    $Res_permission->save();
                    $Res_permission->syncRoles($request->roles);
                }
                return redirect()->route('permission-listing.index')->with('success','Record has been updated');
            }else{
                $permission = new Permission();
                $permission->name = $request->permission_name;
                $permission->controller = $request->controller_name;
                if ($permission->save()) {
                    $permission->syncRoles($request->roles);
                    return redirect()->route('permission-listing.index')->with('success','Record has been updated');
                } else {
                    return redirect()->route('permission-listing.create')->with('error','Something went wrong');
                }
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('permission-listing.create')->with('error','Dont insert duplicate Permission');
        }
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
    public function edit($id)
    {
        $data = Permission::find($id);
        return view('permission-listing.edit',compact('data'));

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
        $data = Permission::find($id);
        $data->controller = $request->controller;
        $data->name = $request->name;
        if ($data->save()) {
            return redirect()->route('permission-listing.index')->with('success','Record updated successfully.');
        }else{
            return redirect()->route('permission-listing.edit',$id)->with('error','Something went to wrong, please try again!.');
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
        $permission = Permission::find($id);
        $permission->delete();
        return redirect()->back()->with('success', 'Permissions deleted successfully.');
    }
}
