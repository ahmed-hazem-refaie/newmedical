
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group col-md-12 pull-left">
    <label>{{__('setting.name_ar')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>

    {!! Form::text("name_ar",null,['class'=>'form-control ','placeholder'=>   __('setting.name_ar') ])!!}

</div>

<div class="form-group col-md-12 pull-left">
    <label>{{__('setting.name_en')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>

    {!! Form::text("name_en",null,['class'=>'form-control ','placeholder'=>   __('setting.name_en') ])!!}

</div>
<hr>
<div class="form-group col-md-12 pull-left">
    <label>{{__('setting.icon')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>

    {!! Form::text("icon",null,['class'=>'form-control ','placeholder'=>   __('setting.icon') ])!!}

</div>
<hr>
<div class="form-group col-md-12 pull-left">
    <label> {{__('setting.description_ar')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::textarea("description_ar",null,['class'=>'form-control ','placeholder'=>__('setting.description_ar')."....." ])!!}
</div>

<div class="form-group col-md-12 pull-left">
    <label> {{__('setting.description_en')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::textarea("description_en",null,['class'=>'form-control ','placeholder'=>__('setting.description_en')."....." ])!!}
</div>




<div class="text-center col-md-12">
    <div class="text-right">
        <button type="submit" class="btn btn-success">{{__('save')}} <i class="icon-arrow-left13 position-right"></i></button>
    </div>
</div>
@push('scriptsss')
    
<script>



</script>
@endpush