@extends('admin.layouts.layout')
@section('title')
{{__('service.edit')}} 
{{$item['name_'.app()->getLocale()]}}@endsection

@section('header')

@endsection

@push('breadcrumb')

<li class="active">  <a href="{{route('dashboard.home')}}">{{__('all-setting')}}</a></li>
<li class="active">  <a href="{{route('dashboard.service.index')}}">{{__('service.index')}}</a></li>

@endpush

@section('content')
    <!-- Vertical form options -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title"> {{__('service.edit')}} {{$item['name_'.app()->getLocale()]}}</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">

                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                            {!!Form::model($item , ['route' => ['dashboard.service.update' , [ $item->id]] ,'class'=>'phone_validate myform','method' => 'PATCH','files'=>true]) !!}
                            @include('admin.service.form')
                            {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/form_layouts.js')}}"></script>

@endsection
