
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="alert alert-danger myerrordiv" hidden>
        <ul class="myerrorul">

        </ul>
    </div>


<div class="form-group col-md-12 pull-left">
    <label>{{__('product.name')}} </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>

    {!! Form::text("name",null,['class'=>'form-control ','placeholder'=>   __('product.name') ])!!}
    <div class="bg-info"></div>
</div>

<div class="form-group col-md-12 pull-left">
    <label>{{__('product.title')}} </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>

    {!! Form::text("title",null,['class'=>'form-control ','placeholder'=>   __('product.title') ])!!}
    <div class="bg-info"></div>

</div>

{{-- <div class="form-group col-md-12 pull-left">
    <label>{{__('product.title')}} </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>

    {!! Form::select("alpha_category",range('A','Z'),null,['class'=>'form-control ','placeholder'=>   __('product.title') ])!!}
    <div class="bg-info"></div>

</div> --}}

<div class="form-group col-md-12 pull-left">
    <label>{{__('pdf')}} </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>

    {!! Form::file("pdf",null,['class'=>'form-control ','placeholder'=>   __('pdf') ])!!}
    <div class="bg-info"> PDF FILE</div>

</div>



<div class="form-group col-md-12 pull-left">
    <label> {{__('product.description')}} </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>
    {!! Form::textarea("description",null,['class'=>'form-control ','placeholder'=>__('product.description')."....." ])!!}
    <div class="bg-info"></div>

</div>

<div class="form-group col-md-12 pull-left">
    {{-- <label> {{__('product.content')}} </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span> --}}
    {!! Form::textarea("content",null,['class'=>'form-control editortextarea','placeholder'=>__('product.content')."....." ])!!}
</div>




<div class="form-group col-md-6 pull-left">

    <label>{{__('product.logo')}}   </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>
@isset($item)
        <img src=" {{getimg($item->logo)}}" style="width: 100px; height: 100px" class="img-thumbnail">
    @endisset
<div class="image_en images" name="logo" style="padding-top: .5rem;"></div>
<div class="bg-info">      image|dimensions:min_width=300,min_height=300,max_width1080,max_height=1080',</div>
</div>




<div class="form-group col-md-6 pull-left">

    <label>{{__('product.image')}}   </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>
@isset($item)
        <img src=" {{getimg($item->image)}}" style="width: 100px; height: 100px" class="img-thumbnail">
    @endisset
<div class="image_ar images" name="image" style="padding-top: .5rem;"></div>
<div class="bg-info">'image|dimensions:min_width=480,min_height=550,max_width1080,max_height=1080',</div>
</div>




<div class="form-group col-md-12 pull-left">
    <label>{{__('Related Products')}} </label>  <span class="label bg-danger help-inline">Required</span>

    <div style="border: 1px solid silver;">
        <select placeholder='ADD Tags' class=" js-example-tags form-control" multiple="multiple" name="relatedproducts[]" data-width="50%"> 
        
        @foreach ($parent->product as $value=>$object)

        @php
            
        @endphp
        <option  value="{{$object->id}}" 

            @isset($item)

        
            @if ($item->related_products->where('related_product_id',$object->id)->count())
            selected
 
            @endif
            @endisset
            >
            {{object_get($object,'name')}}
        </option>

        @endforeach
        </select>
    </div>

</div>


{{-- 
<div class="form-group col-md-12 pull-left">

    <label>{{__('product.header_image')}}   </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>
    @isset($item)
        <img src=" {{getimg($item->header_image)}}" style="width: 100px; height: 100px" class="img-thumbnail">
    @endisset
<div class="icon_ar images" name="header_image" style="padding-top: .5rem;"></div>

</div> --}}






{{-- seo --}}


<div class="form-group col-md-12 pull-left ">



    <div class="panel panel-white">
        <div class="panel-heading" role="tab" id="heading2">
            <h4 class="panel-title font-weight-bold">
                <a class="d-block" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                aria-controls="collapseTwo">
                    {{__('admin.setSEO')}}
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse  " role="tabpanel" aria-labelledby="heading2">
            <div class="panel-body">

                <div class="form-group col-md-12 pull-left">
                    <label>{{__('product.seo_title')}} </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>
                
                    {!! Form::text("seo_title",null,['class'=>'form-control ','placeholder'=>   __('product.seo_title') ])!!}
                
                </div>
                
    
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('product.seo_description')}} </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>
                    
                    {!! Form::text("seo_description",null,['class'=>'form-control ','placeholder'=>   __('product.seo_description') ])!!}
                
                </div>
                
     
                
                
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('product.seo_keywords')}} </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>
                
                    {!! Form::text("seo_keywords",null,['class'=>'form-control form-tags-1','placeholder'=>   __('product.seo_keywords') ])!!}
                
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

<div class="row">


    <div class="text-center col-md-12 ">

            <div class="progress">
                <div class="bar"></div >
                <div class="percent">0%</div >
            </div>

    </div>


</div>

@push('scripts')
  
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>


                    $(function() {

                    var bar = $('.bar');
                    var percent = $('.percent');
                    var status = $('#status');

                    $('.myform').ajaxForm({
                        beforeSend: function() {
                            status.empty();
                            var percentVal = '0%';
                            bar.width(percentVal);
                            percent.html(percentVal);

                            $('.myerrorul').html('');
                            $('.myerrordiv').attr('hidden',true);


                        },
                        uploadProgress: function(event, position, total, percentComplete) {
                            var percentVal = percentComplete + '%';
                            bar.width(percentVal);
                            percent.html(percentVal);
                        },
                        complete: function(xhr) {
                            status.html(xhr.responseText);
                        },
                        error:function(e){

                            alert('Error Occured Plz Call Suport')

                        },
                        success:function(data) {
                        
                            if(data.status ==false)
                            {
                                $(window).scrollTop(0);
                                $('.myerrordiv').attr('hidden',false);

                                if(errors = data.errors)
                                {
                                    errors.forEach(element => {

                                        
                                        $('.myerrorul').append(`<li>${element}</li>`);                     
                                    });
                                }

                                return
                            }

                            if(data.status ==true)
                            {

                            

                                new swal({
                                    title: "Added!",
                                    text: "Your row has been updated.",
                                    type: "success",
                                    timer: 3000,
                                    buttons: false,
                                })
                                .then(() => {
                                    window.location.href = data.url;
                                })


                                    return

                            }

                            alert('Error Occurred PLease Call Support')
                            
                        
                        },
                    });
                    });  --}}



        </script>
@endpush