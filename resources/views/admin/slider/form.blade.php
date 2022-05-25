
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
    <label> {{__('slider.lg_text_ar')}} </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>
    {!! Form::textarea("lg_text_ar",null,['class'=>'form-control ','placeholder'=>__('slider.lg_text_ar')."....." ])!!}
    <div class="bg-info"> character count should be in range 10 t0 200</div>

</div>


<div class="form-group col-md-12 pull-left">
    <label> {{__('slider.lg_text_en')}} </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>
    {!! Form::textarea("lg_text_en",null,['class'=>'form-control ','placeholder'=>__('slider.lg_text_en')."....." ])!!}
    <div class="bg-info"> character count should be in range 10 t0 200</div>

</div>

<div class="form-group col-md-12 pull-left">
    <label> {{__('slider.sm_text_ar')}} </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>
    {!! Form::textarea("sm_text_ar",null,['class'=>'form-control ','placeholder'=>__('slider.sm_text_ar')."....." ])!!}
    <div class="bg-info"> character count should be in range 10 t0 200</div>

</div>

<div class="form-group col-md-12 pull-left">
    <label> {{__('slider.sm_text_en')}} </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>
    {!! Form::textarea("sm_text_en",null,['class'=>'form-control ','placeholder'=>__('slider.sm_text_en')."....." ])!!}
    <div class="bg-info"> character count should be in range 10 t0 200</div>

</div>





<div class="form-group col-md-6 pull-left">

    <label>{{__('slider.image_ar')}}   </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>
@isset($item)
        <img src=" {{getimg($item->image_ar)}}" style="width: 100px; height: 100px;    background-color: mediumslateblue;" class="img-thumbnail">
@endisset
<div class="image_en images" name="image_ar" style="padding-top: .5rem;"></div>
<div class="bg-info"> dimensions:min_width=1920,min_height=1080,2000,max_height=1100</div>

</div>


<div class="form-group col-md-6 pull-left">

    <label>{{__('slider.image_en')}}   </label>  <span class="label bg-danger help-inline">{{__('Required')}}</span>
@isset($item)
        <img src=" {{getimg($item->image_en)}}" style="width: 100px; height: 100px;    background-color: mediumslateblue;" class="img-thumbnail">
@endisset
<div class="image_en images" name="image_en" style="padding-top: .5rem;"></div>
<div class="bg-info"> dimensions:min_width=1920,min_height=1080,2000,max_height=1100</div>

</div>








<div class="text-center col-md-12">
    <div class="text-right">
        <button type="submit" class="btn btn-success">{{__('save')}} <i class="icon-arrow-left13 position-right"></i></button>
    </div>
</div>

<div class="row">


    


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