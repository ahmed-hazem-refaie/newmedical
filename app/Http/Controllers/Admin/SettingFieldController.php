<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingFieldRequest;
use App\Models\Setting;
use App\Models\SettingField;
use Illuminate\Http\Request;

class SettingFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Setting $setting)
    {
        $items  =$setting->fields ;

        // foreach ($items as $key => $value) {


        //     $inputs = $value->toArray();

        //     $inputs['name'] = $value->name . "_eg";
        //     SettingField::create($inputs);

        //     $inputs['name'] = $value->name . "_sa";
        //     SettingField::create($inputs);




        // }
        // dd('done');

         return view('admin.settingfields.index', compact('items','setting'));

            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Setting $setting )
    {

        return view('admin.settingfields.create',compact('setting'));
     
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SettingFieldRequest $request,Setting $setting)
    {

        $setting->fields()->create($request->all());
        alert()->success( __('settingfields.done').__('settingfields.add'))->autoclose(5000);
        return redirect(route('dashboard.setting.field.index',$setting));

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SettingField  $settingField
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting,SettingField $field)
    {
        return view('admin.settingfields.create',['setting'=>$setting,'item'=>$settingField]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SettingField  $settingField
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting,SettingField $field)
    {
        return view('admin.settingfields.edit',['setting'=>$setting,'item'=>$field]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SettingField  $settingField
     * @return \Illuminate\Http\Response
     */
    public function update(SettingFieldRequest $request,Setting $setting, SettingField $field)
    {
        $field->update($request->all());
        alert()->success( __('settingfields.done').__('settingfields.update'))->autoclose(5000);
        return redirect(route('dashboard.setting.field.index',$setting));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SettingField  $settingField
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting,SettingField $field)
    {
        $field->delete();
        alert()->success( __('settingfields.done').__('settingfields.delete'))->autoclose(5000);
        return redirect()->back();
    }
}
