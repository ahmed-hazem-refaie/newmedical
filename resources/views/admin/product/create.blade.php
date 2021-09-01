@extends('admin.layouts.layout')
@section('title')
  {{__("product.add")}}
@endsection

@section('header')

@endsection
@push('breadcrumb')

<li class="active">  <a href="{{route('dashboard.maincategory.product.index',[$parent->id])}}">{{__('product.index')}}</a></li>

@endpush
@section('content')
    <!-- Vertical form options -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">    {{__("product.add")}}                    </h5>
                    <div class="heading-elements">
                        <ul class="icons-list">

                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    {!!Form::open( ['route' => ['dashboard.maincategory.product.store',[$parent->id]] ,'class'=>'form phone_validate myform', 'method' => 'Post','files' => true]) !!}
                    @include('admin.product.form')
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
<!-- #END# Basic Validation -->
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/form_layouts.js')}}"></script>
@endsection
