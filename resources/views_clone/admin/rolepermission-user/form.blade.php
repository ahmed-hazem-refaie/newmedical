@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif



<div class="form-group col-xs-12 pull-left">
    <label>     {{__('rolepermission.name')}}  </label>
    {!! Form::text("name",null,['class'=>'form-control' , 'disabled'=>false])!!}
</div>
<hr>
<div class="form-group col-xs-12 pull-left">
    <label> {{__('rolepermission.permissions')}} :</label>
</div>

@php
    if(!isset($permissions))
    $permissions= [];
    // $permissions= [];

@endphp


{{-- start§ --}}

<div class=" col-xs-12">
    <div class="checkbox checkbox-left checkbox-switchery col-lg-4 ">
        <label>
            {{ Form::checkbox('permissions[]','home',in_array("home", $permissions),['class'=>'switchery','id'=>'home' ]) }}
            {{__('admin.home')}}
        </label>
    </div>

</div>
<div class=" col-xs-12">
    <hr>



</div>



{{-- end --}}

{{-- start§ --}}

<div class=" col-xs-12">
    <div class="checkbox checkbox-left checkbox-switchery col-lg-4 ">
        <label>
            {{ Form::checkbox('permissions[]','setting',in_array("setting", $permissions),['class'=>'switchery','id'=>'setting']) }}
            {{__('admin.setting')}}  {{__('admin.system')}}  
        </label>
    </div>



    @foreach (\App\Models\Setting::all()  as $item)
        
    <div class="checkbox col-lg-4">
        <div class="checkbox-container">

            {{ Form::checkbox("permissions[]",$item->name_en,in_array($item->name_en, $permissions),['class'=>'setting ' ,'disabled'=>!in_array($item->name_en, $permissions)  ]) }}

            <div class="checkbox-checkmark"></div>
        </div>
    <label for="checkbox-default" >  {{__('admin.setting    ')}}   {{$item['name_'.app()->getLocale()]}}</label>
    </div>

    @endforeach






</div>
<div class=" col-xs-12">
    <hr>



</div>



{{-- end --}}
















{{-- start§ --}}

<div class=" col-xs-12">
    <div class="checkbox checkbox-left checkbox-switchery col-lg-4 ">
        <label>
            {{ Form::checkbox('permissions[]','dashboardblogs',in_array("dashboardblogs", $permissions),['class'=>'switchery','id'=>'dashboardblogs' ]) }}
            {{__('admin.setting')}}     {{__('blog.blog')}} 
        </label>
    </div>

    <div class="checkbox col-lg-4">
        <div class="checkbox-container">

            {{ Form::checkbox("permissions[]",'dashboardblogs_add',in_array("dashboardblogs_add", $permissions),['class'=>'dashboardblogs ' ,'disabled'=>!in_array("dashboardblogs_add", $permissions) ]) }}

            <div class="checkbox-checkmark"></div>
        </div>
        <label for="checkbox-default" >   {{__('admin.setting')}}     {{__('blog.add')}} </label>
    </div>

    <div class="checkbox col-lg-4">
        <div class="checkbox-container">

            {{ Form::checkbox("permissions[]",'dashboardblogs_edit',in_array("dashboardblogs_edit", $permissions),['class'=>'dashboardblogs ' ,'disabled'=>!in_array("dashboardblogs_edit", $permissions) ]) }}

            <div class="checkbox-checkmark"></div>
        </div>
        <label for="checkbox-default" >   {{__('admin.setting')}}     {{__('blog.edit')}} </label>
    </div>

    <div class="checkbox col-lg-4">
        <div class="checkbox-container">

            {{ Form::checkbox("permissions[]",'dashboardblogs_delete',in_array("dashboardblogs_delete", $permissions),['class'=>'dashboardblogs ' ,'disabled'=>!in_array("dashboardblogs_delete", $permissions) ]) }}

            <div class="checkbox-checkmark"></div>
        </div>
        <label for="checkbox-default" >   {{__('admin.setting')}}     {{__('blog.delete')}} </label>
    </div>



</div>
<div class=" col-xs-12">
    <hr>



</div>



{{-- end --}}















<div class="text-center col-xs-12">
    <div class="text-right">
        <button type="submit" class="btn btn-success">{{{__('admin.save')}}} <i class="icon-arrow-left13 position-right"></i></button>
    </div>
</div>

@push('scripts')

    <script>


        $( ".switchery" ).click(function() {

            if(this.checked){
                $( "."+this.id).removeAttr("disabled");
                $( "."+this.id).not(this).prop('checked', this.checked);

            } else {
                $( "."+this.id).attr("disabled", true);
                $( "."+this.id).removeAttr('checked');
            }

        });



    </script>
@endpush
