
{{-- start§ --}}

<div class=" col-xs-12">
    <div class="checkbox checkbox-left checkbox-switchery col-lg-4 ">
        <label>
            {{ Form::checkbox('permissions[]','features',in_array("features", $permissions),['class'=>'switchery','id'=>'features' ]) }}
            {{__('admin.setting')}}     {{__('application.application')}} 
        </label>
    </div>

    <div class="checkbox col-lg-4">
        <div class="checkbox-container">

            {{ Form::checkbox("permissions[]",'features_add',in_array("features_add", $permissions),['class'=>'features ', 'disabled'=>!in_array("features", $permissions) ])   }}
            
            <div class="checkbox-checkmark"></div>
        </div>
        <label for="checkbox-default" >   {{__('admin.setting')}}     {{__('application.add')}} </label>
    </div>
 
    <div class="checkbox col-lg-4">
        <div class="checkbox-container">

            {{ Form::checkbox("permissions[]",'features_edit',in_array("features_edit", $permissions),['class'=>'features ' , 'disabled'=>!in_array("features", $permissions) ])  }}

            <div class="checkbox-checkmark"></div>
        </div>
        <label for="checkbox-default" >   {{__('admin.setting')}}     {{__('blog.edit')}} </label>
    </div>

    <div class="checkbox col-lg-4">
        <div class="checkbox-container">

            {{ Form::checkbox("permissions[]",'features_delete',in_array("features_delete", $permissions),['class'=>'features ', 'disabled'=>!in_array("features", $permissions) ])   }}

            <div class="checkbox-checkmark"></div>
        </div>
        <label for="checkbox-default" >   {{__('admin.setting')}}     {{__('application.delete')}} </label>
    </div>


    <div class="checkbox col-lg-4">
        <div class="checkbox-container">

            {{ Form::checkbox("permissions[]",'features_features',in_array("features_features", $permissions),['class'=>'features ', 'disabled'=>!in_array("features", $permissions) ])   }}

            <div class="checkbox-checkmark"></div>
        </div>
        <label for="checkbox-default" >   {{__('admin.setting')}}     {{__('rolepermission.features_features')}} </label>
    </div>


    <div class="checkbox col-lg-4">
        <div class="checkbox-container">

            {{ Form::checkbox("permissions[]",'features_controlpanels',in_array("features_controlpanels", $permissions),['class'=>'features ', 'disabled'=>!in_array("features", $permissions) ])  }}

            <div class="checkbox-checkmark"></div>
        </div>
        <label for="checkbox-default" >   {{__('admin.setting')}}     {{__('rolepermission.features_controlpanels')}} </label>
    </div>

 

</div>
<div class=" col-xs-12">
    <hr>



</div>





{{-- end --}}

