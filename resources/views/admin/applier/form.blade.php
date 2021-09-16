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
    <label>{{__('product.date')}} </label> <span class="label bg-danger help-inline"> {{__('required')}} </span>

    {!! Form::text("date",null,['class'=>'form-control ','placeholder'=> __('product.date') ])!!}

</div>

<div class="form-group col-md-12 pull-left">
    <label>{{__('product.title')}} </label> <span class="label bg-danger help-inline"> {{__('required')}} </span>

    {!! Form::text("title",null,['class'=>'form-control ','placeholder'=> __('product.title') ])!!}

</div>

<div class="form-group col-md-12 pull-left">
    <label>{{__('product.desc')}} </label> <span class="label bg-danger help-inline"> {{__('required')}} </span>

    {!! Form::text("desc",null,['class'=>'form-control ','placeholder'=> __('product.desc') ])!!}

</div>


<div class="form-group col-md-12 pull-left">
    <label> {{__('product.content')}} </label> <span class="label bg-danger help-inline">{{__('required')}}</span>
    {!! Form::textarea("content",null,['class'=>'form-control editortextarea','placeholder'=>__('product.content')."....." ])!!}
</div>








<div class="form-group col-md-6 pull-left">

    <label>{{__('product.image')}} </label> <span class="label bg-danger help-inline">{{__('required')}}</span>
    @isset($item)
    <img src=" {{getimg($item->image)}}" style="width: 100px; height: 100px" class="img-thumbnail">
    @endisset


    {!! Form::file("image",null,['class'=>'form-control editortextarea','placeholder'=>__('product.content')."....." ])!!}
</div>



<div class="form-group col-md-6 pull-left">

    <label>{{__('product.video')}} </label> <span class="label bg-danger help-inline">{{__('required')}}</span>
    @isset($item->video)
    <video src="{{getimg($item->video)}}" style="height: 86px;width: 100px;"></video>
    @endisset


    {!! Form::file("video",null,['class'=>'form-control'])!!}
</div>




<div class="form-group col-md-12 pull-left">
    <label>{{__('settingfields.type')}} </label> <span class="label bg-danger help-inline">مطلوب</span>

    {!! Form::select('type', ['0'=>__('product.image'),'1'=>__('product.video')],null , ['class'=>'form-control ',]) !!}
</div>




<div class="text-center col-md-12">
    <div class="text-right">
        <button type="submit" class="btn btn-success">{{__('admin.save')}} <i class="icon-arrow-left13 position-right"></i></button>
    </div>
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
            <label>{{__('product.seo_title_ar')}} </label> <span class="label bg-danger help-inline">{{__('required')}}</span>

            {!! Form::text("seo_title_ar",null,['class'=>'form-control ','placeholder'=> __('product.seo_title_ar') ])!!}

        </div>


        <div class="form-group col-md-12 pull-left">
            <label>{{__('product.seo_title_en')}} </label> <span class="label bg-danger help-inline">{{__('required')}}</span>

            {!! Form::text("seo_title_en",null,['class'=>'form-control ','placeholder'=> __('product.seo_title_en') ])!!}

        </div>

        <div class="form-group col-md-12 pull-left">
            <label>{{__('product.seo_description_ar')}} </label> <span class="label bg-danger help-inline">{{__('required')}}</span>

            {!! Form::text("seo_description_ar",null,['class'=>'form-control ','placeholder'=> __('product.seo_description_ar') ])!!}

        </div>

        <div class="form-group col-md-12 pull-left">
            <label>{{__('product.seo_description_en')}} </label> <span class="label bg-danger help-inline">{{__('required')}}</span>

            {!! Form::text("seo_description_en",null,['class'=>'form-control ','placeholder'=> __('product.seo_description_en') ])!!}

        </div>

        <div class="form-group col-md-12 pull-left">
            <label>{{__('product.seo_keywords_ar')}} </label> <span class="label bg-danger help-inline">{{__('required')}}</span>

            {!! Form::text("seo_keywords_ar",null,['class'=>'form-control form-tags-1','placeholder'=> __('product.seo_keywords_ar') ])!!}

        </div>

        <div class="form-group col-md-12 pull-left">
            <label>{{__('product.seo_keywords_en')}} </label> <span class="label bg-danger help-inline">{{__('required')}}</span>

            {!! Form::text("seo_keywords_en",null,['class'=>'form-control form-tags-1 ','placeholder'=> __('product.seo_keywords_en') ])!!}

        </div>



    </div>
</div>
</div>

</div> --}}

{{-- --}}


@push('scriptsss')

<script>
    $(document).ready(function() {

        $(document).ready(function() {

            $(".js-example-tags").select2({
                tags: true,
                placeholder: '{{__('
                product.addtags ')}}',

            });
        })

    });
</script>
@endpush