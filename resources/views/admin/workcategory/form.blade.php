
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
    <label>{{__('workcategory.name')}} </label>  <span class="label bg-danger help-inline"> {{__('required')}} </span>

    {!! Form::text("name",null,['class'=>'form-control ','placeholder'=>   __('workcategory.name') ])!!}

</div>



<div class="form-group col-md-12 pull-left">
    <label>{{__('workcategory.name')}} </label>  <span class="label bg-danger help-inline"> {{__('required')}} </span>

    {!! Form::text("description",null,['class'=>'form-control ','placeholder'=>   __('workcategory.name') ])!!}

</div>


















{{-- seo --}}


{{-- <div class="form-group col-md-12 pull-left">



    <div class="panel panel-white">
        <div class="panel-heading" role="tab" id="heading2">
            <h4 class="panel-title font-weight-bold">
                <a class="d-block" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                aria-controls="collapseTwo">
                    {{__('admin.setSEO')}}
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse  in" role="tabpanel" aria-labelledby="heading2">
            <div class="panel-body">

                <div class="form-group col-md-12 pull-left">
                    <label>{{__('workcategory.seo_title_ar')}} </label>  <span class="label bg-danger help-inline">{{__('required')}}</span>
                
                    {!! Form::text("seo_title_ar",null,['class'=>'form-control ','placeholder'=>   __('workcategory.seo_title_ar') ])!!}
                
                </div>
                
                
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('workcategory.seo_title_en')}} </label>  <span class="label bg-danger help-inline">{{__('required')}}</span>
                
                    {!! Form::text("seo_title_en",null,['class'=>'form-control ','placeholder'=>   __('workcategory.seo_title_en') ])!!}
                
                </div>
                
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('workcategory.seo_description_ar')}} </label>  <span class="label bg-danger help-inline">{{__('required')}}</span>
                    
                    {!! Form::text("seo_description_ar",null,['class'=>'form-control ','placeholder'=>   __('workcategory.seo_description_ar') ])!!}
                
                </div>
                
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('workcategory.seo_description_en')}} </label>  <span class="label bg-danger help-inline">{{__('required')}}</span>
                    
                    {!! Form::text("seo_description_en",null,['class'=>'form-control ','placeholder'=>   __('workcategory.seo_description_en') ])!!}
                
                </div>
                
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('workcategory.seo_keywords_ar')}} </label>  <span class="label bg-danger help-inline">{{__('required')}}</span>
                
                    {!! Form::text("seo_keywords_ar",null,['class'=>'form-control form-tags-1','placeholder'=>   __('workcategory.seo_keywords_ar') ])!!}
                
                </div>
                
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('workcategory.seo_keywords_en')}} </label>  <span class="label bg-danger help-inline">{{__('required')}}</span>
                
                    {!! Form::text("seo_keywords_en",null,['class'=>'form-control form-tags-1 ','placeholder'=>   __('workcategory.seo_keywords_en') ])!!}
                
                </div>



            </div>
        </div>
    </div>

</div> --}}

{{--  --}}

<div class="text-center col-md-12">
    <div class="text-right">
        <button type="submit" class="btn btn-success">{{__('save')}} <i class="icon-arrow-left13 position-right"></i></button>
    </div>
</div>
@push('scriptsss')
    
<script>

$(document).ready(function(){

        $(document).ready(function(){

        $(".js-example-tags").select2({
        tags: true,
        placeholder: '{{__('workcategory.addtags')}}',

        });
        })

});
</script>
@endpush