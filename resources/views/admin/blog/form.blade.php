
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
    <label>{{__('blog.name_ar')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>

    {!! Form::text("name_ar",null,['class'=>'form-control ','placeholder'=>   __('blog.name_ar') ])!!}

</div>

<div class="form-group col-md-12 pull-left">
    <label>{{__('blog.name_en')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>

    {!! Form::text("name_en",null,['class'=>'form-control ','placeholder'=>   __('blog.name_en') ])!!}

</div>

<div class="form-group col-md-12 pull-left">
    <label> {{__('blog.description_ar')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::textarea("description_ar",null,['class'=>'form-control editortextarea','placeholder'=>__('blog.description_ar')."....." ])!!}
</div>

<div class="form-group col-md-12 pull-left">
    <label> {{__('blog.description_en')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::textarea("description_en",null,['class'=>'form-control editortextarea','placeholder'=>__('blog.description_en')."....." ])!!}
</div>


<div class="form-group col-md-12 pull-left">
    <label> {{__('blog.content_ar')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::textarea("content_ar",null,['class'=>'form-control editortextarea','placeholder'=>__('blog.content_ar')."....." ])!!}
</div>


<div class="form-group col-md-12 pull-left">
    <label> {{__('blog.content_en')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::textarea("content_en",null,['class'=>'form-control editortextarea','placeholder'=>__('blog.content_en')."....." ])!!}
</div>


<div class="form-group col-md-6 pull-left">

    <label>{{__('blog.image_ar')}}   </label>  <span class="label bg-danger help-inline">مطلوب</span>
@isset($item)
        <img src=" {{getimg($item->image_ar)}}" style="width: 100px; height: 100px" class="img-thumbnail">
    @endisset
<div class="image_ar images" name="image_ar" style="padding-top: .5rem;"></div>

</div>


<div class="form-group col-md-6 pull-left">

    <label>{{__('blog.image_en')}}   </label>  <span class="label bg-danger help-inline">مطلوب</span>
@isset($item)
        <img src=" {{getimg($item->image_en)}}" style="width: 100px; height: 100px" class="img-thumbnail">
    @endisset
<div class="image_en images" name="image_en" style="padding-top: .5rem;"></div>

</div>



<div class="form-group col-md-6 pull-left">

    <label>{{__('blog.icon_ar')}}   </label>  <span class="label bg-danger help-inline">مطلوب</span>
@isset($item)
        <img src=" {{getimg($item->icon_ar)}}" style="width: 100px; height: 100px" class="img-thumbnail">
    @endisset
<div class="icon_ar images" name="icon_ar" style="padding-top: .5rem;"></div>

</div>


<div class="form-group col-md-6 pull-left">

    <label>{{__('blog.icon_en')}}   </label>  <span class="label bg-danger help-inline">مطلوب</span>
@isset($item)
        <img src=" {{getimg($item->icon_en)}}" style="width: 100px; height: 100px" class="img-thumbnail">
    @endisset
<div class="icon_en images" name="icon_en" style="padding-top: .5rem;"></div>

</div>


<div class="form-group col-md-12 pull-left">
    <label>{{__('blog.relatedblogs')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>

    <div style="border: 1px solid silver;">
        <select placeholder='ADD Tags' class=" js-example-tags form-control" multiple="multiple" name="relatedblogs[]" data-width="50%"> 
        
        @foreach ($blogs as $value=>$object)

        @php
            
        @endphp
        <option  value="{{$object->id}}" 

            @isset($item)

        
            @if ($item->related_blogs->where('related_blog_id',$object->id)->count())
            selected
 
            @endif
            @endisset
            >
            {{object_get($object,'name_'.app()->getLocale())}}
        </option>

        @endforeach
        </select>
    </div>

</div>

{{-- seo --}}


<div class="form-group col-md-12 pull-left">



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
                    <label>{{__('blog.seo_title_ar')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>
                
                    {!! Form::text("seo_title_ar",null,['class'=>'form-control ','placeholder'=>   __('blog.seo_title_ar') ])!!}
                
                </div>
                
                
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('blog.seo_title_en')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>
                
                    {!! Form::text("seo_title_en",null,['class'=>'form-control ','placeholder'=>   __('blog.seo_title_en') ])!!}
                
                </div>
                
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('blog.seo_description_ar')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>
                    
                    {!! Form::text("seo_description_ar",null,['class'=>'form-control ','placeholder'=>   __('blog.seo_description_ar') ])!!}
                
                </div>
                
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('blog.seo_description_en')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>
                    
                    {!! Form::text("seo_description_en",null,['class'=>'form-control ','placeholder'=>   __('blog.seo_description_en') ])!!}
                
                </div>
                
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('blog.seo_keywords_ar')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>
                
                    {!! Form::text("seo_keywords_ar",null,['class'=>'form-control form-tags-1','placeholder'=>   __('blog.seo_keywords_ar') ])!!}
                
                </div>
                
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('blog.seo_keywords_en')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>
                
                    {!! Form::text("seo_keywords_en",null,['class'=>'form-control form-tags-1 ','placeholder'=>   __('blog.seo_keywords_en') ])!!}
                
                </div>



            </div>
        </div>
    </div>

</div>

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
        placeholder: '{{__('blog.addtags')}}',

        });
        })

});
</script>
@endpush