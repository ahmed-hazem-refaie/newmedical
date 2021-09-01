<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    function __construct(Role $role, Permission $Permission) {
        $this->role = $role;
        $this->permission = $Permission;
        // $this->middleware("can:allow,'dashboardgroups'", ['only' => ['show','index']]);
        // $this->middleware("can:allow,'dashboardgroups_add'", ['only' => ['create','store']]);
        // $this->middleware("can:allow,'dashboardgroups_edit'", ['only' => ['update','edit']]);
        // $this->middleware("can:allow,'dashboardgroups_delete'", ['only' => ['destroy']]);
    
    
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->role->all();
        return view('admin.rolepermission.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rolepermission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required|string',
            'permissions'=>'array',
        ]);     
           $new = $this->role->firstOrCreate(['name' => $request->name]);

           $arr  =[];
        if (isset($request['permissions'])) {
            $premissions = $request['permissions'];
            foreach ($premissions as $pre) {
                $ret =   $this->permission::firstOrCreate(['name' => $pre], ['name' => $pre]);
                array_push($arr,$ret);
            }
            $new->givePermissionTo($arr);

            $this->role->syncPermissions($arr);
        }

        alert()->success( __('rolepermission.done').__('rolepermission.add'))->autoclose(5000);
        return redirect()->route('dashboard.rolepermission.index');


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
    //    dd( \Auth::user()->roles);
        // \Auth::user()->assignRole('Super Admin');
        // dd(\Auth::user()->can('settingd'));
        $role = Role::findOrFail($id);
        $permissions = $role->permissions->pluck('name')->toArray();
        // $group = $this->group->getById($id);
        // if($group)
        // $permissions  = $group->Permissions->pluck('permission')->toArray();
        

        return view('admin.rolepermission.edit', ['role' => $role,'permissions'=>$permissions]);
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

        $this->validate($request,[
            'name'=>'required|string|unique:roles,name,'.$id,
            'permissions'=>'array',
        ]);     
        $role= Role::find($id) ;
    
                foreach ($role->permissions as $key => $value) {
                    

                    $role->revokePermissionTo($value);
                }

                if (isset($request['permissions'])) {
                    $arr=[];
                    $premissions = $request['permissions'];
                    foreach ($premissions as $pre) {
                        $ret =   $this->permission::firstOrCreate(['name' => $pre], ['name' => $pre]);
                        array_push($arr,$ret);
                    }
                    $role->givePermissionTo($arr);
        
                }
                alert()->success( __('rolepermission.done').__('rolepermission.edit'))->autoclose(5000);

        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role  = Role::findOrFail($id);
        if ($role->name  == 'Super Admin')
        {
            popup('danger',null,__('rolepermission.preventdelete'));
            return back();
        }


        $role->delete();
        alert()->success( __('rolepermission.done').__('rolepermission.delete'))->autoclose(5000);


        return back();

    }
}
