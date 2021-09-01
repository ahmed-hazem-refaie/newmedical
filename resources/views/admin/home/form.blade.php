
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
    <label>الاسم بالعربية </label>  <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::text("ar_name",null,['class'=>'form-control','placeholder'=>'  الاسم بالعربية '])!!}
</div>

<div class="form-group col-md-12 pull-left">
    <label>الاسم  بالانجليزية</label>  <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::text("en_name",null,['class'=>'form-control','placeholder'=>'  الاسم بالانجليزية '])!!}
</div>

<div class="form-group col-md-12 pull-left">
    <label>الوصف  بالعربية</label>  <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::textarea("ar_description",null,['class'=>'form-control','placeholder'=>'  الوصف بالعربية ... '])!!}
</div>

<div class="form-group col-md-12 pull-left">
    <label>الوصف  بالانجليزية</label>  <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::textarea("en_description",null,['class'=>'form-control','placeholder'=>'  الوصف بالانجليزية ... '])!!}
</div>

<div class="form-group col-md-6 pull-left">

    <label>الصوره   </label>  <span class="label bg-danger help-inline">مطلوب</span>
@isset($item)
        <img src=" {{getimg($item->image)}}" style="width: 100px; height: 100px" class="img-thumbnail">
    @endisset
<div class="image" name="image" style="padding-top: .5rem;"></div>

</div>







<div class="text-center col-md-12">
    <div class="text-right">
        <button type="submit" class="btn btn-success">{{__('save')}} <i class="icon-arrow-left13 position-right"></i></button>
    </div>
</div>
