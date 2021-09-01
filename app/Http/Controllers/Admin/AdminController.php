<?php
namespace App\Http\Controllers\Admin;
use App\Models\Group;
use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
 use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{


    function __construct() {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
         $users= User::get();
        return view('admin.admins.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $roles=Role::pluck('name','id')->toArray();
        return view('admin.admins.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $roles  = Role::whereIn('id',$request->role_id)->pluck('name')->toArray();
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required||string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role_id'=>'required|array'
        ]);
        $inputs=$request->all();
        $inputs['password']=FacadesHash::make($request->password);
        $inputs['type']= 1;



        $user  = User::create($inputs);
        $user->assignRole($roles);

         alert()->success(__('admins.done').__('admins.add') )->autoclose(5000);
        return redirect(route('dashboard.admins.index'));
    }


    public function addOrRemove_admin(Request $request)
    {
        $user  =  $request->user_id ;
        $user  =  User::findOrFail($user) ;
        $user_type = $user->type ;

       if($user_type== null)
       {

            $user->type = 1;
           alert()->success(__('admins.done').__('admins.add') )->autoclose(5000);

       }

       if($user_type == 1)
       {

           $user->type  =null;
           alert()->success(__('admins.done').__('admins.delete') )->autoclose(5000);

       }     
 
       $user->save();
       return redirect()->back();

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
         $user= User::find($id);
        $roles=Role::pluck('name','id')->toArray();
        
        return view('admin.admins.edit',compact('user','roles'));
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
        $user= User::find($id);
        $roles  = Role::whereIn('id',$request->role_id)->pluck('name')->toArray();
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>"required||string|email|max:255|unique:users,email,$user->id",
            'password' => 'nullable|string|min:6|confirmed',
            'role_id'=>'required|array'
        ]);
        $inputs=$request->all();
        unset($inputs['password']);
        if($request->password)
        $inputs['password']=FacadesHash::make($request->password);
         $user->update($inputs);
         $oldroles = $user->roles->pluck('name')->toArray();
         if(count($oldroles))
         foreach ($oldroles as $key => $value) 
             $user->removeRole($value);
         

        $user->assignRole($roles);

         alert()->success(__('admins.done').__('admins.edit') )->autoclose(5000);
        return redirect(route('dashboard.admins.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        if($user->email=='admin@admin.com'){
            alert()->error('لايمكن حذف الادمن  ');
            return back();
        }
        if ($user){
            $user->delete();
            alert()->success('تم حذف الادمن بنجاح');
            return back();
        }
        alert()->error('الادمن الذى تحاول حذفه غير موجود');
         return back();

    }
}
