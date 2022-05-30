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
    <label>{{__('blog.name_ar')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>

    {!! Form::text("name_ar",null,['class'=>'form-control ','placeholder'=> __('blog.name_ar') ])!!}
    <div class="bg-info"></div>
</div>

<div class="form-group col-md-12 pull-left">
    <label>{{__('blog.name_en')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>

    {!! Form::text("name_en",null,['class'=>'form-control ','placeholder'=> __('blog.name_en') ])!!}
    <div class="bg-info"></div>
</div>







{{-- <div class="form-group col-md-12 pull-left">
    <label>{{__('blog.title')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>

{!! Form::select("alpha_category",range('A','Z'),null,['class'=>'form-control ','placeholder'=> __('blog.title') ])!!}
<div class="bg-info"></div>

</div> --}}




<div class="form-group col-md-12 pull-left">
    <label> {{__('blog.description_ar')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>
    {!! Form::textarea("description_ar",null,['class'=>'form-control editortextarea','placeholder'=>__('blog.description_ar')."....." ])!!}
    <div class="bg-info"></div>

</div>



<div class="form-group col-md-12 pull-left">
    <label> {{__('blog.description_en')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>
    {!! Form::textarea("description_en",null,['class'=>'form-control editortextarea','placeholder'=>__('blog.description_en')."....." ])!!}
    <div class="bg-info"></div>

</div>

{{--
<div class="form-group col-md-12 pull-left">
    <label> {{__('blog.description_ar')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>
{!! Form::textarea("description_ar",null,['class'=>'form-control ','placeholder'=>__('blog.description_ar')."....." ])!!}
<div class="bg-info"></div>

</div>



<div class="form-group col-md-12 pull-left">
    <label> {{__('blog.description_en')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>
    {!! Form::textarea("description_en",null,['class'=>'form-control ','placeholder'=>__('blog.description_en')."....." ])!!}
    <div class="bg-info"></div>

</div> --}}




<div class="form-group col-md-6 pull-left">

    <label>{{__('blog.image_ar')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>
    @isset($item)
    <img src=" {{getimg($item->image_ar)}}" style="width: 100px; height: 100px" class="img-thumbnail">
    @endisset
    <div class="image_en images" name="image_ar" style="padding-top: .5rem;"></div>
    <div class="bg-info"> image|dimensions:min_width=300,min_height=300,max_width1080,max_height=1080',</div>
</div>




<div class="form-group col-md-6 pull-left">

    <label>{{__('blog.image_en')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>
    @isset($item)
    <img src=" {{getimg($item->image_en)}}" style="width: 100px; height: 100px" class="img-thumbnail">
    @endisset
    <div class="image_en images" name="image_en" style="padding-top: .5rem;"></div>
    <div class="bg-info"> image|dimensions:min_width=300,min_height=300,max_width1080,max_height=1080',</div>
</div>



<div class="form-group col-md-12 pull-left">

    <label>{{__('blog.category')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>
    <select name="category_id" id="" required>
        @foreach($categories as $category)
        <option value="{{$category->id}}">
            {{$category->name_en}}
        </option>
        @endforeach
    </select>
</div>

{{-- seo --}}


<div class="form-group col-md-12 pull-left ">



    <div class="panel panel-white">
        <div class="panel-heading" role="tab" id="heading2">
            <h4 class="panel-title font-weight-bold">
                <a class="d-block" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    {{__('admin.setSEO')}}
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse  " role="tabpanel" aria-labelledby="heading2">
            <div class="panel-body">

                <div class="form-group col-md-12 pull-left">
                    <label>{{__('blog.seo_title_en')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>

                    {!! Form::text("seo_title_en",null,['class'=>'form-control ','placeholder'=> __('blog.seo_title') ])!!}

                </div>

                
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('blog.seo_title_ar')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>

                    {!! Form::text("seo_title_ar",null,['class'=>'form-control ','placeholder'=> __('blog.seo_title_ar') ])!!}

                </div>


                <div class="form-group col-md-12 pull-left">
                    <label>{{__('blog.seo_description_en')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>

                    {!! Form::text("seo_description_en",null,['class'=>'form-control ','placeholder'=> __('blog.seo_description') ])!!}

                </div>

                <div class="form-group col-md-12 pull-left">
                    <label>{{__('blog.seo_description_ar')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>

                    {!! Form::text("seo_description_ar",null,['class'=>'form-control ','placeholder'=> __('blog.seo_description_ar') ])!!}

                </div>




                <div class="form-group col-md-12 pull-left">
                    <label>{{__('blog.seo_keywords_en')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>

                    {!! Form::text("seo_keywords_en",null,['class'=>'form-control form-tags-1','placeholder'=> __('blog.seo_keywords') ])!!}

                </div>

                
                <div class="form-group col-md-12 pull-left">
                    <label>{{__('blog.seo_keywords_ar')}} </label> <span class="label bg-danger help-inline">{{__('Required')}}</span>

                    {!! Form::text("seo_keywords_ar",null,['class'=>'form-control form-tags-1','placeholder'=> __('blog.seo_keywords_ar') ])!!}

                </div>





            </div>
        </div>
    </div>

</div>

{{-- --}}

<div class="text-center col-md-12">
    <div class="text-right">
        <button type="submit" class="btn btn-success">{{__('save')}} <i class="icon-arrow-left13 position-right"></i></button>
    </div>
</div>

<div class="row" hidden>


    <div class="text-center col-md-12 ">

        <div class="progress">
            <div class="bar"></div>
            <div class="percent">0%</div>
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