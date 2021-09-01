
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
    <label>{{__('blogcomments.name')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>

    {!! Form::text("name",null,['class'=>'form-control ','placeholder'=>   __('blogcomments.name') ])!!}

</div>

<div class="form-group col-md-12 pull-left">
    <label>{{__('blogcomments.email')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>

    {!! Form::text("email",null,['class'=>'form-control ','placeholder'=>   __('blogcomments.email') ])!!}

</div>

<div class="form-group col-md-12 pull-left">
    <label> {{__('blogcomments.body')}} </label>  <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::textarea("body",null,['class'=>'form-control ','placeholder'=>__('blogcomments.body')."....." ])!!}
</div>



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
        placeholder: '{{__('blogcomments.addtags')}}',

        });
        })

});
</script>
@endpush