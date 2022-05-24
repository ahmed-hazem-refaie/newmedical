
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
    <label>{{__('admins.name')}}  </label>  <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::text("name",null,['class'=>'form-control','placeholder'=>__('admins.name')])!!}
</div>

{{--{{dd($country)}}--}}

<div class="form-group col-md-6 pull-left">
    <label> {{__('admins.email') }}</label>   <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::email("email",null,['class'=>'form-control','placeholder'=>  __('admins.email')])!!}
</div>

<div class="form-group col-md-6 pull-left">
    <label>{{ __('admins.phone') }}</label>  <span class="label bg-danger help-inline">مطلوب</span>
    {!! Form::text("phone",null,['class'=>'form-control','placeholder'=>__('admins.phone')])!!}
</div>

<div class="form-group col-md-6 pull-left">
    <label>{{__('admins.password') }}</label>   <span class="label bg-danger help-inline">مطلوب</span>
    <input type="password" class="form-control" name="password" placeholder={{__('admins.password')}}>
</div>

<div class="form-group col-md-6 pull-left">
    <label>    {{ __('admins.password_confirmation')}} </label> <span class="label bg-danger help-inline">مطلوب</span>
    <input type="password" class="form-control" name="password_confirmation" placeholder={{__('admins.password_confirmation')}}>
</div>

<div class="form-group col-md-6 pull-left">
    <label>    {{ __('admins.roles') }} </label>
    <div>

        @if (isset($user->roles))
        {!! Form::select("role_id[]",$roles,$user->roles->pluck('id')->toArray(),['class'=>'form-control','placeholder'=>__('admins.role'),'multiple'])!!}

        @else
        {!! Form::select("role_id[]",$roles,null,['class'=>'form-control','placeholder'=>__('admins.role'),'multiple'])!!}

        @endif


    </div>
</div>


<div class="text-center col-md-12">
    <div class="text-right">
        <button type="submit" class="btn btn-success">{{__('admin.save')}} <i class="icon-arrow-left13 position-right"></i></button>
    </div>
</div>
