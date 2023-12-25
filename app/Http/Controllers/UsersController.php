<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Auth;
use Hash;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;


class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data =User::orderBy('users.id','desc')->where('is_deleted',0)->paginate(10);
        return view('users.index',compact('data'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $RoleList = Role::all();
        return view('users.create',compact('RoleList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users|max:255',
        ]);
        $user = new User();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            $role = Role::findOrFail($request->role);
            $user->assignRole($role);
            return redirect()->route('users.index')->with('success','Record created successfully.');
        } else {
            return view('users.create')->with('error','Something went to wrong, please try again!.');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $RoleList = Role::all();
        $data = User::find($id);
        $roleId =NULL;
        if ($data->roles->first()!=NULL) {
            $roleId = $data->roles->first()->id;
        }
        return view('users.edit',compact('data','RoleList','roleId'));
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
         $request->validate([
                'email' => [
                    'email',
                    'required',
                     Rule::unique('users')->ignore($id),
                ],
            ]);
        $user = User::find($id);
        $roleId =NULL;
        if ($user->roles->first()!=NULL) {
            $roleId = $user->roles->first()->id;
        }
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        if (isset($request->password)) {
        $user->password = Hash::make($request->password);
        }
          if ($user->save()) {
            if ($roleId!=$request->role ||$roleId==NULL) {
                if ($roleId!=NULL) {
                    $user->removeRole($roleId);
                }
                $user->assignRole($request->role);
            }
            return redirect()->route('users.index')->with('success','Record created successfully.');
        } else {
            return view('users.edit')->with('error','Something went to wrong, please try again!.');
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
        $user = User::find($id);
        if($user->is_deleted==0){
            $user->is_deleted = 1;
            $msg = 'Record deleted successfully';
        }else{
            $user->is_deleted = 0;
            $msg = 'Record restore successfully';
        }
        $user->update();
        return redirect()->route('users.index')->with('success',$msg);
    }

    public function VerifyUser(Request $request)
    {
        $user = User::find($request->id);
        $user->email_verified_at = now();
        if ($user->update()) {
            return json_encode(['status'=>true,'msg'=>'User Verified']);
        }else{
            return json_encode(['status'=>false,'msg'=>'Something went wrong']);
        }
        
    }
    public function ChangeStatus($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users.index')->with('error','User not found');
        }

        $user->status = $user->status == 1 ? 0 : 1;
        $msg = $user->status == 1 ? 'User has been unblocked' : 'User has been blocked';

        if ($user->update()) {
            return redirect()->route('users.index')->with('success',$msg);
        } else {
            return redirect()->route('users.index')->with('error','Something went wrong');
        }
    }
}
