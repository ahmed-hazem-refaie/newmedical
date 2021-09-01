
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
    <label>{{__('settingfields.name')}} </label>  <span class="label bg-danger help-inline">{{__('required')}}</span>

    {!! Form::text("name",null,['class'=>'form-control ','placeholder'=>   __('settingfields.name') ])!!}

</div>

<section id="image_dimention">

    <div class="form-group col-md-12 pull-left">
        <label>{{__('settingfields.dim1')}} </label>  <span class="label bg-danger help-inline">{{__('required')}}</span>
    
        {!! Form::text("dim1",null,['class'=>'form-control ','placeholder'=>   __('settingfields.dim1') ])!!}
    
    </div>
    
    
    <div class="form-group col-md-12 pull-left">
        <label>{{__('settingfields.dim2')}} </label>  <span class="label bg-danger help-inline">{{__('required')}}</span>
    
        {!! Form::text("dim2",null,['class'=>'form-control ','placeholder'=>   __('settingfields.dim2') ])!!}
    
    </div>

</section>

<div class="form-group col-md-12 pull-left">
    <label>{{__('settingfields.validation_msg')}} </label>  <span class="label bg-danger help-inline">{{__('required')}}</span>

    {!! Form::text("validation_msg",null,['class'=>'form-control ','placeholder'=>   __('settingfields.validation_msg') ])!!}

</div>

<div class="form-group col-md-12 pull-left">
    <label>{{__('settingfields.validation')}} </label>  <span class="label bg-danger help-inline">{{__('required')}}</span>

    {!! Form::text("validation",null,['class'=>'form-control ','placeholder'=>   __('settingfields.validation') ])!!}

</div>

<div class="form-group col-md-12 pull-left">
    <label>{{__('settingfields.type')}} </label>  <span class="label bg-danger help-inline">{{__('required')}}</span>

    {!!   Form::select('type', ['1'=>__('settingfields.texttype'),'5'=>__('settingfields.number'),'2'=>__('settingfields.textarea'),'3'=>__('settingfields.image'), '33'=>__('settingfields.image')."no resize"  ,'4'=>__('settingfields.video'), '10'=>__('settingfields.yes_no'), '9'=>__('settingfields.media_3_select') , '7'=>__('settingfields.youtube') ,'8'=>__('settingfields.img_video')],null , ['class'=>'form-control   ', 'id'=>'change_type' ]) !!}
</div>






<div class="text-center col-md-12">
    <div class="text-right">
        <button type="submit" class="btn btn-success">{{__('save')}} <i class="icon-arrow-left13 position-right"></i></button>
    </div>
</div>

@push('scripts')
    
<script>

$(document).ready(function(){

        // $(document).ready(function(){

        // $(".js-example-tags").select2({
        // tags: true,
        // placeholder: '{{__('settingfields.addtags')}}',

        // });
        // })



        $('#image_dimention').hide();
        $('#change_type').on('change',function(e){

console.log(e.target.value);
            $('#image_dimention').hide();

            if(e.target.value  == 3)
            $('#image_dimention').show();

        })

});
</script>
@endpush